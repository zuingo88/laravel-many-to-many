<?php

namespace App\Http\Controllers;

use App\Employee;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home() {

        $employees = Employee::all();

        return view('pages.home', compact('employees'));
    }
}
