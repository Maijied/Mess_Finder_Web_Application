<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Blog;
use Auth;


class BlogController extends Controller
{

    public function publicHomePage()
    {
        $blogs = Blog::paginate(10);

        return view('mainview/home',['blogs'=>$blogs]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loggedInUserId = Auth::id();
        $blogs = Blog::all()->where('user_id',$loggedInUserId);
       return view('adminPanel/home',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;

        $blogTitle =  $request->title;
        $blogBody = $request->body;
        $blogLocation = $request->location;
        $blogNumber = $request->number;
        $blogRoom  = $request->room;
        $blogCost  = $request->cost;
        $blogUserId = Auth::id();
        
        $blog ->user_id = $blogUserId;
         $blog ->title = $blogTitle;
         $blog ->body = $blogBody;
         $blog ->location = $blogLocation;
         $blog ->number = $blogNumber;
         $blog ->room = $blogRoom;
          $blog ->cost = $blogCost;

         $blog ->save();

         return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
