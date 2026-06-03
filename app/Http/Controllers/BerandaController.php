<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Experience;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $student = Student::getProfile();

        return view('pages.beranda', compact('student'));
    }

    public function profile()
    {
        $student = Student::getProfile();
        $experiences = Experience::getAll();

        return view('pages.profile', compact('student', 'experiences'));
    }
}