<?php
/*
//////////////////////////////////////////////////////////////////////////
// Criacao...........: 12/2021
// Sistema...........: CMS
// Desenvolvedores...: Denny Paulista Azevedo Filho
// Copyright.........: Denny Paulista Azevedo Filho
//////////////////////////////////////////////////////////////////////////
*/

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('site.home');
    }
}
