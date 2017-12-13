<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
//    public function index() {
//
//        return view('index, ['query' => $query ]');
//    }
    public function search() {
        if ($query = \Request::get('query')) {
            $results = Section::search($query)->get();
            return view('pages.index', ['query' => $query, 'results' => $results]);
        }
        else {
            return view('pages.index', ['query' => null]);
        }

    }
    //
}
