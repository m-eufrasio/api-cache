<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    protected $model;

    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    /**
     * Capture all registers
     * @return object
     */
    public function all(): mixed
    {
        return $this->model->select('*')->paginate(15);
    }

    /**
     * Fetch a specified resource by id
     * @return object
     */
    public function find($id): mixed
    {
        return $this->model->find($id);
    }

    /**
     * Insert one resource
     * @return object
     */
    public function create($data): mixed
    {
        return $this->model->create($data);
    }
}