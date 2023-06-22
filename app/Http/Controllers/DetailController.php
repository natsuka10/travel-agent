<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Testimonial;

class DetailController extends Controller
{
    public function show(Destination $destination){
        return view('frontend.destinasi.detail',compact('destination'));
    }
    public function index(Destination $destination){
        $destinations = Destination::get();
        return view('frontend.destinasi.index',compact('destinations'));
    }
    public function testimoni(Testimonial $testimonial){
        $testimonials = Testimonial::get();
        return view('frontend.contact',compact('testimonials'));
    }
}
