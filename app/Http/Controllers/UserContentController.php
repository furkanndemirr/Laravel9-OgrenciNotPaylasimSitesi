<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Content;
use App\Models\UserContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use const http\Client\Curl\AUTH_ANY;

class UserContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Content::where('user_id',Auth::id())->get();
        return view('home.usercontent',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Category::with('children')->get();
        return view('home.usercontentadd',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=new Content();
        $data->category_id= $request->category_id;
        $data->user_id= Auth::id();
        $data->title= $request->title;
        $data->keywords= $request->keywords;
        $data->description= $request->description;
        $data-> school_name = $request->school_name;
        $data-> course_name = $request->course_name;
        $data->detail= $request->detail;
        if($request->file('file')){
            $data->file=$request->file('file')->store('files');
        }
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('/usercontent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content,$id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Content::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image))
        {
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('usercontent');
    }
}
