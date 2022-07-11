<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'articles'   => Article::orderBy('updated_at', 'DESC')->take(3)->get(),
        ];
        return view('dashboard', $data);
    }
}
