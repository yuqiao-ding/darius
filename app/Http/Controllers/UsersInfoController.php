<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\JsonResponseTrait;
use Log;

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
                "name" => "周*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "7",
                "name" => "吴*",
                "created_at" => "2016-05-02",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "8",
                "name" => "郑*",
                "created_at" => "2016-05-19",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "9",
                "name" => "丁*",
                "created_at" => "2016-05-02",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "10",
                "name" => "孙*",
                "created_at" => "2016-05-09",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "11",
                "created_at" => "2016-05-09",
                "name" => "李*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "12",
                "name" => "和*",
                "created_at" => "2016-05-03",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "13",
                "created_at" => "2016-05-02",
                "name" => "且*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "14",
                "name" => "林*",
                "created_at" => "2016-05-01",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "15",
                "created_at" => "2016-05-02",
                "name" => "凌*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "16",
                "created_at" => "2016-05-01",
                "name" => "胡*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "17",
                "created_at" => "2016-05-03",
                "name" => "杨*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "18",
                "created_at" => "2016-05-02",
                "name" => "肯噶*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "19",
                "name" => "阿达*",
                "created_at" => "2016-05-22",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "20",
                "created_at" => "2016-05-12",
                "name" => "洒大地*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "21",
                "created_at" => "2016-05-11",
                "name" => "郭德纲*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "22",
                "created_at" => "2016-05-05",
                "name" => "华人*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ],
              [
                "id" => "23",
                "created_at" => "2016-05-08",
                "name" => "隔几天*",
                "age" => "21",
                "email" => "9818618@qq.com",
                "phone" => "188****888888",
                "address" => "上海路1号向公馆"
              ]

        ];
        DB ::table('usersdata')->insert($insertData);
    }
    public function index()
    {
        $users = DB::table('usersdata')->get();
        // Log::info($users);
        return response()->json(['users'=>$users]);
        dd($users);
        
    }
    
    public function plus(Request $request)
    {
      
      // $data['id'] =$request->input('id');
      $data['name'] =$request->input('name');
      $data['phone'] =$request->input('phone');
      $data['email'] =$request->input('email');
      $data['created_at'] =$request->input('created_at');
      $data['address'] =$request->input('address');
      $data['age'] =$request->input('age');

      DB::table('usersdata')->insert($data);
      return response()->json(['data'=>$data]);
    }
    
    public function delete(Request $request)
    {    
      $data['id'] =$request->input('id');
      DB::table('usersdata')->where('id','=',$data['id'])->delete();
    }

    public function update(Request $request)
    {    
      $data["id"] =$request->input('id');
      $data["name"] =$request->input('name');
      $data["phone"] =$request->input('phone');
      $data["email"] =$request->input('email');
      $data["created_at"] =$request->input('created_at');
      $data["address"] =$request->input('address');
      $data["age"] =$request->input('age');
      
      DB::table('usersdata')->where('id',$data['id'])->update(['id' => $data["id"],'name' => $data["name"],'phone' => $data["phone"],
      'email' => $data["email"],'created_at' => $data["created_at"],'address' => $data["address"],'age' => $data["age"]]);
    }
}
