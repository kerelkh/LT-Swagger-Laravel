<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UsersController extends Controller
{
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
    public function getUsers(Request $request) {
        return [
            'success' => true,
            'message' => 'Success getting data',
            'data' => [
                [
                    'name' => 'John doe',
                    'age' => 48
                ],
                [
                    'name' => 'Tristan El Fuq',
                    'age' => 34
                ]
            ]
                ];
    }

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
    public function insertUser(Request $request) {
        return [
            'success' => true
        ];
    }
}
