<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        echo "INDEX FUNCTION";
        exit();
    }
    public function show()
    {
        $university="karabuk üniversity";
        $dept="computer engineering";
        return view('show', [
            'university' => $university,
            'department' => $dept
        ]);
    }
    public function test()
    {
        return view('home.test');
    }
    public function param($id,$number)
    {
        //echo "Parameter 1 : " , $id;
        //echo "<br> Parameter 2 : " , $number;
        //echo "<br> SUM PARAMETERS : " , $id + $number;
        return view('home.test2', [
            'id' => $id,
            'number' => $number
        ]);

    }
}
