<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Midmenu;
use App\Models\Novita;
use App\Models\Social;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function index(){
    $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
    $socials = Social::orderby('icon_order')->get()->toArray();
    $contact = Contact::where('id', 1)->get()->toArray();
    $midmenu = Midmenu::orderby('item_order')->pluck('link', 'title')->toArray();
    $news = Novita::latest()->take(5)->get()->toArray();
    //print_r($topmenu);
    return view('layouts.default.main')->with([
        'topmenu' => $topmenu,
        'socials' => $socials,
        'contact' => $contact,
        'midmenu' => $midmenu,
        'news' => $news,


    ]);
    }


    public function about(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('link', 'title')->toArray();
        $about = Page::find(1)->pluck('content')->toArray();
        //print_r($about);
        return view('layouts.default.about')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'about' => $about,


        ]);
    }

    public function history(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('link', 'title')->toArray();
        $history = Page::find(1)->pluck('content')->toArray();
        //print_r($about);
        return view('layouts.default.history')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'history' => $history,


        ]);
    }

    public function advantages(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('link', 'title')->toArray();
        $advantages = Page::where('id',2)->pluck('content')->toArray();
        //print_r($topmenu);
        return view('layouts.default.advantages')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'advantages' => $advantages,


        ]);
    }

    public function program(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('link', 'title')->toArray();
        $program = Page::where('id',3)->pluck('content')->toArray();
        //print_r($topmenu);
        return view('layouts.default.program')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'program' => $program,


        ]);
    }


}
