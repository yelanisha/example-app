<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('wheres.index', compact('wheres'));
    }
}