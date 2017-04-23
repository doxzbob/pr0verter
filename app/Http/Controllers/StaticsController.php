<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticsController extends Controller
{
    public function index() {
        return view('statics.index');
    }

    public function converter() {
        return view('converter.home');
    }

    public function faq() {
        return view('statics.faq');
    }

    public function contact() {
        return view('statics.contact');
    }
}