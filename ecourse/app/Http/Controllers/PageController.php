<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view("frontend.pages.home");

    }

    public function course(){
        $course="David shahi";
        return view("frontend.pages.course",compact("course"));

    }


    public function about(){
        return view("frontend.pages.about");

    }

    public function contact(){

        return view("frontend.pages.contact");

    }

    public function teacher(){
        return view("frontend.pages.teacher");

    }

    public function blog(){
        return view("frontend.pages.blog");

    }
}
