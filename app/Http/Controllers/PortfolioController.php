<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
    	return view('portfolio');
    }

    public function portfolioUploadForm()
    {
    	return view('portfoliouploadform');
    }

    public function postManagePortfolio(Request $request)
    {
        $images = $request->file('files');

        if(!empty($images)){
            foreach($images as $image){
                Storage::put($image->getClientOriginalName(), file_get_contents($image));
            }
        }
        return redirect()->back();
        	
    }
}
