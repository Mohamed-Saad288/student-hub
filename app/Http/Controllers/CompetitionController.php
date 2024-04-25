<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::latest()->get();

        return view('competition.index',['competitions' => $competitions]);
    }
}
