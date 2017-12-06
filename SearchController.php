<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SearchController extends Controller
{
    public function find(Request $request){

        return User::search($request->get('q'))->get();

    }
}
