<?php
/*
//////////////////////////////////////////////////////////////////////////
// Criacao...........: 12/2021
// Sistema...........: CMS
// Desenvolvedores...: Denny Paulista Azevedo Filho
// Copyright.........: Denny Paulista Azevedo Filho
//////////////////////////////////////////////////////////////////////////
*/

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        return view('admin.home');
    }
}
