<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    public function test(){
        $tests = Test::query()->get();
        return view('admin.test',compact('tests'));
    }

    public function testPost(Request $request){
        Test::query()->insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'position' => $request->position
        ]);
        return redirect()->route('admin.test');
    }
    public function testStatusUpdate($id,$status){
        if ($status == 1){
            Test::query()->where('id',$id)->update([
                'status' => 0
            ]);
        }else{
            Test::query()->where('id',$id)->update([
                'status' => 1
            ]);
        }
        return redirect()->route('admin.test');
    }

    public function testUpdate($id){
        $test = Test::query()->where('id',$id)->first();
        return view('admin.test_update',compact('test'));
    }

    public function testUpdatePost(Request $request,$id){
        Test::query()->where('id',$id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'position' => $request->position
        ]);
        return redirect()->route('admin.testUpdate',['id' => $id]);
    }
}

