<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    protected $repository;

    public function __construct(PostRepository $post)
    {
        $this->repository = $post;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Verify if the resource exists into database, if not then will get from cache
        $values = Cache::remember('posts', 60, function () {
            $datas = $this->repository->all();

            Cache::put('posts', $datas);

            return $datas;
        });

        return response()->json([
            'message' => 'successfully',
            'values' => $values,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imgRules = [
            'img' => 'nullable|mimes:jpg,png,jpeg,gif|max:30000', // Max size 30MB
        ];

        $videoRules = [
            'video' => 'nullable|mimes:mp4,mov,avi|max:40000', // Max size 40MB
        ];

        if ($request->hasFile('img')) {
            $imgValidator = Validator::make($request->all(), $imgRules);

            if ($imgValidator->fails()) {
                return response()->json([
                    'error' => 'Invalid image file',
                    'message' => $imgValidator->errors()->first('img'),
                ], Response::HTTP_BAD_REQUEST);
            }
        }

        if ($request->hasFile('video')) {
            $videoValidator = Validator::make($request->all(), $videoRules);

            if ($videoValidator->fails()) {
                return response()->json([
                    'error' => 'Invalid video file',
                    'message' => $videoValidator->errors()->first('video'),
                ], Response::HTTP_BAD_REQUEST);
            }
        }

        $content = isset($request->content) ? $request->content : null;

        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('public/media/img');
            $imgUrl = Storage::url($imgPath);
        }

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('public/media/video');
            $videoUrl = Storage::url($videoPath);
        }

        $this->repository->create([
            'title' => $request->title,
            'content' => $content,
            'image_url' => isset($imgUrl) ? $imgUrl : null,
            'video_url' => isset($videoUrl) ? $videoUrl : null,
            'image_alt' => $request->imageAlt,
            'video_thumbnail' => $request->videoThumbnail,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        return response()->json([
            'message' => 'created successfully'
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = null;

        $data = Cache::remember($id, 120, function () use ($id, &$data) {
            $data = $this->repository->find($id);
            
            Cache::put($id, $data);

            return $data;
        });

        return response()->json([
            'message' => 'successfully',
            'data' => $data,
        ], Response::HTTP_OK);
    }
}
