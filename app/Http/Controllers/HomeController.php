<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getAddContent()
    {
        return view('addcontent');
    }

    public function postContent(Request $request)
    {
        
        $this->validate($request, [
            'title' => 'required|min:5',
            'description' => 'required|max:60' 
        ]);

        $title = $request->title;
        echo count($title);
        $description = $request->description;
        
        $page = new Page;
        $page->title = $title;
        $page->description = $description;
        //dd($page);
        
        $page->save();
        return redirect()->route('home');

    }
}


