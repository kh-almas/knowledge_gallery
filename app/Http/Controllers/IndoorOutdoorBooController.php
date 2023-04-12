<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndoorOutdoorBooController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indoor()
    {
        return view('layouts.admin.books.indoorBooks');
    }

    /**
     * Display a listing of the resource.
     */
    public function outdoor()
    {
        return view('layouts.admin.books.outdoorBooks');
    }
}
