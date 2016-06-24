<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $data = [];
        $data['first'] = 'Ima';
        $data['last'] = 'Adnyani';
        return view ('pages.about', $data);
    }
}
