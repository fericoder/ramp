<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GlanceController extends Controller
{
    public function index()
    {
        $photos = Gallery::orderBy('id', 'DESC')->limit(10)->get();
        return view('glance', compact('photos'));
    }
}
