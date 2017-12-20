<?php

namespace App\Http\Controllers;

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

    public function postManagePortfolio()
    {

    }
}
