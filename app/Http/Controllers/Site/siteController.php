<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class siteController extends Controller
{
    public function index(){
        return view('site.home.index');
    }


}
