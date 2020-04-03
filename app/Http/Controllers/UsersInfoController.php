<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersInfoController extends Controller
{
    function insert()
    {
        // DB =>table('users')->insert(['"id"'=>2,'"name"'=>"这是个title",'"email"'=>"1213133456@qq.com",'password'=>"123456"]);
        $insertData = [
            [
                "id" => "1",
                "created_at" => "2016-05-02",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "2",
                "created_at" => "2016-05-17",
                "name" => "钱*",
                "age" => "22",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "3",
                "created_at" => "2016-05-11",
                "name" => "王*",
                "age" => "23",
                "email" => "9818313118@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "4",
                "created_at" => "2016-05-13",
                "name" => "张*",
                "age" => "25",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "5",
                "created_at" => "2016-05-06",
                "name" => "刘*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "6",
                "created_at" => "2016-05-03",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "7",
                "name" => "赵*",
                "created_at" => "2016-05-02",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "8",
                "name" => "赵*",
                "created_at" => "2016-05-19",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "9",
                "name" => "赵*",
                "created_at" => "2016-05-02",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "10",
                "name" => "赵*",
                "created_at" => "2016-05-09",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "11",
                "created_at" => "2016-05-09",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "12",
                "name" => "赵*",
                "created_at" => "2016-05-03",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "13",
                "created_at" => "2016-05-02",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "14",
                "name" => "赵*",
                "created_at" => "2016-05-01",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "15",
                "created_at" => "2016-05-02",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "16",
                "created_at" => "2016-05-01",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "17",
                "created_at" => "2016-05-03",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "18",
                "created_at" => "2016-05-02",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "19",
                "name" => "赵*",
                "created_at" => "2016-05-22",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "20",
                "created_at" => "2016-05-12",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "21",
                "created_at" => "2016-05-11",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "22",
                "created_at" => "2016-05-05",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "23",
                "created_at" => "2016-05-08",
                "name" => "赵*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ]

        ];
        DB ::table('usersinfo')->insert($insertData);
    }
}
