<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class BackEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        $home = Page::where('title','home')->firstOrFail();
        return view('backend.home')->with('home',$home);
    }

    public function updateHome(Request $request, $title)
    {
        {
            $this->validate($request,[
                'heading'=>'required',
                'description'=>'required',
            ]);

            $page = Page::where('title',$title)->firstOrFail();
            $page->heading = $request->heading;
            $page->description = $request->description;
            $page->update();
            return redirect('home')->with('message','Updated');
        }


    }

    public function mission()
    {
        $mission = Page::where('title','mission')->firstOrFail();
        return view('backend.mission')->with('mission',$mission);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
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
    }
}
