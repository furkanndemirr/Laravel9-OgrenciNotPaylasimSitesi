<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    //
    public function index()
    {
        $page='home';
        $sliderdata=Content::limit(6)->get();
        $contentlist1=Content::where('status','true')->limit(15)->get();
        $setting=Setting::first();
        return view('home.index',[
            'page'=>$page,
                'setting'=>$setting,
            'sliderdata'=>$sliderdata,
                'contentlist1'=>$contentlist1
            ]
        );
    }

    public function about()
    {

        $setting=Setting::first();
        return view('home.about',[
                'setting'=>$setting,
            ]
        );
    }
    public function references()
    {

        $setting=Setting::first();
        return view('home.ref',[
                'setting'=>$setting,
            ]
        );
    }
    public function contact()
    {
        $setting=Setting::first();
        return view('home.contact',[
                'setting'=>$setting,
            ]
        );
    }
    public function faq()
    {
        $setting=Setting::first();
        $datalist=Faq::all();
        return view('home.faq',[
                'setting'=>$setting,
                'datalist'=>$datalist
            ]
        );
    }

    public function storecomment(Request $request)
    {
        $data=new Comment();
        $data->user_id=Auth::id();
        $data->content_id=$request->input('content_id');
        $data->subject=$request->input('subject');
        $data->review=$request->input('review');
        $data->rate=$request->input('rate');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('content',['id'=>$request->input('content_id')])->with('success','Your comment has been sent, Thank You.');
    }
    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent, Thank You.');
    }
    public function content($id)
    {
        $data=Content::find($id);
        $images = DB::table('images')->where('content_id',$id)->get();
        $reviews=Comment::where('content_id',$id)->where('status','True')->get();
        return view('home.content',[
            'data'=>$data,
                'images'=>$images,
                'reviews'=>$reviews
            ]
        );
    }
    public function categorycontents($id)
    {
        $category=Category::find($id);
        $contents = DB::table('contents')->where('category_id',$id)->get();
        return view('home.categorycontents',[
                'category'=>$category,
                'contents'=>$contents
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
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
