<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function show($id)
    {
        $experience = Experience::find($id);

        if (!$experience) {
            abort(404, 'Pengalaman tidak ditemukan');
        }

        return view('pages.experience', compact('experience'));
    }
}