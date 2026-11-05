<?php
// app/Http/Controllers/Admin/DashboardController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news');
    }
}
