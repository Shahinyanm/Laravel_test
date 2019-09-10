<?php

namespace App\Http\Controllers\User;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function __invoke(){

        $companies = Company::where('user_id', auth()->id())->limit(10)->get();

        return view('user.index', compact('companies'));
    }
}
