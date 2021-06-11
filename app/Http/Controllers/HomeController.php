<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
            'items' => Contacts::all(), 
        ]);
    }

    public function search(){
        return view('home',[
            'items' => Contacts::where('First_name', request('search'))->orWhere('Number', request('search'))->get(),
        ]);
    }

    public function store(){
        $attributes = request()->validate([
            'title' => 'string|required|max:255',
            'firstname' => 'string|required|max:255',
            'lastname' => 'string|required|max:255',
            'number' => 'numeric|required',
            'company' => 'string|required|max:255',
        ]);

        Contacts::create([
            'Title' => $attributes['title'],
            'First_name' => $attributes['firstname'],
            'Last_name' => $attributes['lastname'],
            'Number' => $attributes['number'],
            'Company' => $attributes['company']
        ]);

        return back();
    }
}
