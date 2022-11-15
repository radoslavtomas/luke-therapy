<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }
}
