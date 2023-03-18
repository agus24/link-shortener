<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Services\LinkService;
use App\Http\Controllers\Controller;

class LinkShortenerController extends Controller
{
    public function index()
    {
        return view('pages.link_shortener.index');
    }

    public function submitUrl(Request $request, LinkService $linkService)
    {
        $request->validate([
            "url" => "required|url",
        ]);

        $link = Link::where('real_url', $request->url)->first();
        if ($link) {
            return redirect()->back()->withErrors(["url" => "This URL has already been shortened. The shortened URL is: " . route('redirect', $link->short_url)]);
        }

        $url = $request->url;
        $link = $linkService->shortenUrl($url);

        return view('index', compact('link'));
    }
}
