<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index() {
        return view('universities.index'); // تأكد من أن الملف موجود في resources/views/universities/index.blade.php
    }
}
