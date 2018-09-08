<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Article;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $news = new Article();
        $news->title=$request->title;
        $news->category_id=$request->category_id;
        $news->text =$request->text;
        $name = Storage::put("/images",$request->file("image"));
        $url = Storage::url($name);
        $news->image=$url;
        $news->user_id=Auth::user()->id;
        $news->save();
        return redirect("/home");

    }
    public function  index()
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view("articlesCreate")->with(compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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
    public function edit($id)
    {
        $news=Article::find($id);
        $categories=Category::all();
        return view("editArticle")->with(compact("news", "categories"));
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
        $news=Article::find($id);
        if($request->image)
        {
            $news->image=$request->image;
        }
        $news->category_id=$request->category_id;
        $news->title=$request->title;
        $news->text=$request->text;
        $news->save();
        return redirect("/home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = Article::find($id);

    }
}
