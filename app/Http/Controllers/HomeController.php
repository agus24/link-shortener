<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Services\LinkService;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.index');
    }

    public function redirectToUrl($shortUrl)
    {
        $link = Link::where('short_url', $shortUrl)->first();
        if (!$link) {
            abort(404);
        }

        return redirect()->away($link->real_url);
    }
}
