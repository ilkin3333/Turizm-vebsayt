<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller

{
    public function afgan()
    {
        return view('front.pages.afgan'); // afgan.blade.php sayfasını döndürür
    }

    public function azer()
    {
        return view('front.pages.azer'); // azer.blade.php sayfasını döndürür
    }

    public function norvay()
    {
        return view('front.pages.norvay'); // norvay.blade.php sayfasını döndürür
    }

    public function sweden()
    {
        return view('front.pages.sweden'); // sweeden.blade.php sayfasını döndürür
    }

    public function ticket()
    {
        return view('front.pages.ticket'); // ticket.blade.php sayfasını döndürür
    }

    public function turbiro()
    {
        return view('front.pages.turbir'); // turbiro.blade.php sayfasını döndürür
    }

    public function turiki()
    {
        return view('front.pages.turiki'); // turiki.blade.php sayfasını döndürür
    }

    public function turkey()
    {
        return view('front.pages.turkey'); // turkey.blade.php sayfasını döndürür
    }

    public function turuc()
    {
        return view('front.pages.turuc'); // turuc.blade.php sayfasını döndürür
    }


}
