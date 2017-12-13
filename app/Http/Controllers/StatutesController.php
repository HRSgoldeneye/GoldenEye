<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statute;

class StatutesController extends Controller
{
    //
    public function index() {
        $statutes = Statute::latest()->get();
        return view('pages.statute', compact('statutes'));
    }

    public function show(Statute $statute) {
        return view('pages.statute', compact('statute'));

    }
}
