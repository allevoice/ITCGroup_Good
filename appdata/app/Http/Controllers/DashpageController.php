<?php

namespace App\Http\Controllers;


class DashpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adminp');
    }


}
