<?php

namespace App\Services;

use App\Models\Link;

class LinkService
{
    public function shortenUrl($url)
    {
        $link = Link::create([
            "short_url" => $this->generateRandomUrlString(5),
            "real_url" => $url,
        ]);

        return $link;
    }

    private function generateRandomUrlString($length)
    {
        do {
            $randomString = $this->getRandomString($length);
        } while (Link::where('short_url', $randomString)->exists());

        return $randomString;
    }

    function getRandomString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}
