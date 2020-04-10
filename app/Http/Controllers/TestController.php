<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xiaocai\Test\DemoInterface;
use Illuminate\Support\Facades\DB;
use App\Home\Member;

class TestController extends Controller
{
    public function index(DemoInterface $demo)
    {
        dd($demo->demo2());
    }
    public function test()
    {
        $data = DB ::table('usersinfo') -> get();
        $day = date('N');
        return view('home.test.test',compact('data','day'));
    }
    public function test6()
    {
        
        return view('home.test.test6');
    }
    public function test7()
    {
        
        return '提交请求成功';
    }
    public function test8(Request $request)
    {
        
        $model = new Member();
        // $model -> name = 'yangyangyang';
        // $model -> password = '123123123';
        // $model -> email = 'ahdajdhaskh@qq.com';
        // $result = $model -> save();
        $result = $model ->create($request ->all());
        dd($result);
    }
    public function test12()
    {
        
        return view('home.test.test12');
    }
}
