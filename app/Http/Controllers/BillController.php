<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(String $id)
    {
        return view('checkout.index');
    }
}