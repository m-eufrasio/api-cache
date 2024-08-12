<h1 align="center" style="font-weight: bold;">API Cache 💻</h1>

[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity)

<p align="center">
 <a href="#tech">Technologies</a> • 
 <a href="#started">Getting Started</a> • 
  <a href="#routes">API Endpoints</a> •
  <a href="#contacts">Contacts</a>
</p>

<p align="center">
    <b>This API is designed to practice and demonstrate caching using Laravel with Redis. The project includes a comprehensive study and implementation of caching strategies, focusing on handling and storing various types of data, including images and video. To manage this content, a storage system has been integrated into the API.
Additionally, the project incorporates seeders, migrations, and factories to facilitate testing and ensure robust development practices. These features help simulate a simple real-world scenarios and support the development and testing of the caching mechanisms and data storage functionalities.
</b>
</p>

<h2 id="tech">💻 Technologies</h2>

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![Git](https://img.shields.io/badge/git-%23F05033.svg?style=for-the-badge&logo=git&logoColor=white)
![Postman](https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white)
![Postgres](https://img.shields.io/badge/postgres-%23316192.svg?style=for-the-badge&logo=postgresql&logoColor=white)
![Redis](https://img.shields.io/badge/redis-%23DD0031.svg?style=for-the-badge&logo=redis&logoColor=white)

OBS: The database used is PostgreSQL but feel free to use another one.

<h2 id="started">🚀 Getting started</h2>

<h3>Prerequisites</h3>

- [**PHP** version **8** or superior](https://www.php.net/);
- [**Laravel 10** or superior](https://laravel.com/);
- [**GIT 2** or superior](https://github.com);
- [**Postman** version **11** or superior](https://www.postman.com/);
- [**Redis** version **6.0.16** or superior](https://redis.io/docs/latest/operate/oss_and_stack/install/install-redis/install-redis-on-windows/);
- [Any database](https://www.postgresql.org);

<h3>Cloning</h3>

With the command below you will clone the project to your computer:

```bash
git clone https://github.com/m-eufrasio/api-cache.git
```

<h3>Config .env variables</h2>

Use the `.env.example` as reference to create your configuration file `.env`.

<h3>Install Composer</h3>

After clone the project you will need to install composer:
```bash
composer install
```

<h3>Install Redis</h3>

Here is a important part, I used Redis into Windows, so if you are using Windows you will need install a WSL2, but don't worry in the link below are the tutorial learning how install Redis and WSL2.
- (https://redis.io/docs/latest/operate/oss_and_stack/install/install-redis/install-redis-on-windows/)

<h3>Predis</h3>

Predis is a lib that able Laravel to connect with Redis, I recomend you read the documentation (link below) about this because you will need it too.
- (https://laravel.com/docs/10.x/cache)

<h3>Starting</h3>

1. Review the Documentation: Begin by reading the documentation to gain a better understanding of how each request operates. You can find the link to the documentation in the API Endpoints section.

2. Run the Project: Execute the project using the following command:
```bash
php artisan serve
```

3. Sending Requests: Use Postman to send requests, which includes comprehensive documentation for the API and pre-configured requests.
   
<h2 id="routes">📍 API Endpoints</h2>

To have all details about endpoints you can access the complete documentation here: build...

<h2 id="contacts">📫 Contacts</h2>

You can contact me through LinkedIn (www.linkedin.com/in/matheus-eufrásio-51678922b) or GitHub (https://github.com/m-eufrasio) wheter you have any questions or another thing. This project is only to study and is not officially open to pull requests but is not a rule.


