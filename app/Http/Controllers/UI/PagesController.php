<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }

    public function page(Request $request, $any)
    {
        dd($any);
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function approach()
    {
        return Inertia::render('Approach');
    }

    public function getInTouch()
    {
        return Inertia::render('GetInTouch');
    }

    public function whereAmI()
    {
        return Inertia::render('WhereAmI');
    }

    public function therapeuticSpace()
    {
        return Inertia::render('TherapeuticSpace');
    }
}
