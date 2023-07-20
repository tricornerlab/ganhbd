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
    $topmenu = Page::orderby('page_order')->pluck('link', 'title')->toArray();
    $socials = Social::orderby('icon_order')->get()->toArray();
    $contact = Contact::where('id', 1)->get()->toArray();
    $midmenu = Midmenu::orderby('item_order')->pluck('link', 'title')->toArray();
    $news = Novita::latest()->take(5)->get()->toArray();
    //print_r($news);
    return view('welcome')->with([
        'topmenu' => $topmenu,
        'socials' => $socials,
        'contact' => $contact,
        'midmenu' => $midmenu,
        'news' => $news,


    ]);
    }
}
