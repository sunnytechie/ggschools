<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        return view('pages.about');
    }

    public function policy() {
        return view('pages.policy');
    }

    public function classes() {
        return view('pages.class');
    }

    public function facility() {
        return view('pages.facility');
    }

    public function teacher() {
        return view('pages.teacher');
    }

    public function appointment() {
        return view('pages.appointment');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function admission() {
        return view('pages.admissioin');
    }
}
