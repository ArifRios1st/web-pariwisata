<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:Administrator','permission:Manage Product']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }
}
