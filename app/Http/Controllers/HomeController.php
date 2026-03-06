<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('homepage', compact('departments'));
    }
    
    public function cardiology(){
        return view('cardiology');
    }
    
    public function neurology(){
        return view('neurology');
    }
    public function dentistry(){
        return view('dentistry');
    }
    public function ortho(){
        return view('ortho');
    }
    public function pulmonology(){
        return view('pulmonology');
    }
    public function pharmacy(){
        return view('pharmacy');
    }
    public function about(){
        return view('about');
    }

    public function ourdoctors(){
        return view('ourdoctors');
    }
}
