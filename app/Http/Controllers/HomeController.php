<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliderdata=Content::limit(4)->get();
        $contentlist1=Content::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
                'contentlist1'=>$contentlist1
            ]
        );
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
    public function test3()
    {
        return view('home.test3');
    }
    public function save(Request $request)
    {
        echo "SAVE FUNCTION <br>";
        echo "NAME : " , $_REQUEST['fname'];
        echo "<br>SOYAD : " , $_REQUEST['lname'];
    }
}
