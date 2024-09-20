# Swagger Practice

This project is for practice purpose of trying Swagger on laravel project

## How to install swagger ?
You can install swagger by running the following command in your terminal

1. `composer create-project laravel/laravel example-app`
2. `cd example-app`
3. `composer require darkaonline/l5-swagger`
4. `php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"`
5. Create folder API in App/Http/Controllers
6. Create File Api Controller to get data
7. You can use `php artisan make:controller API/<yourapifilename>`
8. insert this block on base Controller on App/Http/Controllers/Controller.php

/**
    * @OA\Info(
    *      version="1.0.0",
    *      title="Dokumentasi API",
    *      description="Lorem Ipsum",
    *      @OA\Contact(
    *          email="hi.wasissubekti02@gmail.com"
    *      ),
    *      @OA\License(
    *          name="Apache 2.0",
    *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
    *      )
    * )
    *
    * @OA\Server(
    *      url=L5_SWAGGER_CONST_HOST,
    *      description="Demo API Server"
    * )
    */

9. on your controller API insert this code for GET

 /**
    *    @OA\Get(
    *       path="/users",
    *       tags={"Users"},
    *       operationId="getUsers",
    *       summary="Get Users",
    *       description="Getting User data",
    *       @OA\Response(
    *           response="200",
    *           description="Ok",
    *           @OA\JsonContent
    *           (example={
    *               "success": true,
    *               "message": "Berhasil mengambil Kategori Berita",
    *               "data": {
    *                   {
    *                   "id": "1",
    *                   "nama_kategori": "Pendidikan",
    *                  }
    *              }
    *          }),
    *      ),
    *  )
    */

10. and this block code for post

/**
    *    @OA\Post(
    *       path="/user/insert",
    *       tags={"Users"},
    *       operationId="insertUser",
    *       summary="Get Users",
    *       description="Getting User data",
    *       @OA\Response(
    *           response="200",
    *           description="Ok",
    *           @OA\JsonContent
    *           (example={
    *               "success": true,
    *               "message": "Berhasil mengambil Kategori Berita",
    *               "data": {
    *                   {
    *                   "id": "1",
    *                   "nama_kategori": "Pendidikan",
    *                  }
    *              }
    *          }),
    *      ),
    *  )
    */

11. You can change those accordingly
12. then, go to l5-swagger.php on Config folder
13. on the last code change this code base on your website

    'constants' => [
        'L5_SWAGGER_CONST_HOST' =>
        env('L5_SWAGGER_CONST_HOST', 'http://lt-swagger.test/api/v1'),
    ],

14. Create Route on folder routes/api.php like this one

Route::group(['prefix' => 'v1'], function() {
    Route::get('/users', [UsersController::class, 'getUsers']);
    Route::post('/user/insert', [UsersController::class, 'insertUser']);
});

15. then run this command everytime you have change on those api

`php artisan l5-swagger:generate`

16. if error fix it, if success then you can run on browser ex. `lt-swagger.test/api/documentation`

17. Done
