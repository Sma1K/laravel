<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use \Excel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index()
    {
        $news = Article::with("user")->with("comments.user")->with("category")->paginate(3);
        //return $news;
        return view('home')->with(compact("news","comments"));
    }

    public function comment(Request $request)
    {
        $coments = new Comment();
        $coments->news_id=$request->news_id;
        $coments->comment=$request->comment;
        $coments->user_id=Auth::user()->id;
        $coments->save();
        if($request->ajax())
        {
            return $coments;
        }
        return back();
    }

    public function export()
    {
        $users = User::all();
        return Excel::create("Users", function($excel) use ($users){
            $excel->sheet("users", function($sheet) use ($users){
                $sheet->fromArray($users);
            });
        })->download();

    }

    
}
