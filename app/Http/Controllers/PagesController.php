<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
//        $people = [];
        $people = [
          'Ketut Suardika', 'Dony Yen', 'Andi Lau'
        ];
        return view ('pages.about', compact('people'));
    }

    public function contact()
    {
        return view ('pages.contact');
    }
}
