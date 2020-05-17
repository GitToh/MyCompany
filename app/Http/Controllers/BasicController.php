<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    // ฟังก์ชั่น Home
    public function home(){
        return view('pages.home');
    }

    // ฟังก์ชั่น About
    public function about(){
        return view('pages.about');
    }

    // ฟังก์ชั่น Service
    public function service(){
        return view('pages.service');
    }

    // ฟังก์ชั่น Portfolio
    public function portfolio(){
        return view('pages.portfolio');
    }

    // ฟังก์ชั่น Blog
    public function blog(){
        return view('pages.blog');
    }

    // ฟังก์ชั่น Contact
    public function contact(){
        return view('pages.contact');
    }
}
