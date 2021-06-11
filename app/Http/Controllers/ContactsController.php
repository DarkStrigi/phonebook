<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;

class ContactsController extends Controller
{
    public function edit(Contacts $contacts){
        return view('edit', [
            'item' => $contacts,
        ]);
    }

    public function remove(Contacts $contacts){
        Contacts::where('id', $contacts->id)->delete();

        return back();
    }

    public function update(Contacts $contacts){
        $attributes = request()->validate([
            'title' => 'string|required|max:255',
            'firstname' => 'string|required|max:255',
            'lastname' => 'string|required|max:255',
            'number' => 'numeric|required',
            'company' => 'string|required|max:255',
        ]);

        Contacts::where('id', $contacts->id)->update([
            'Title' => $attributes['title'],
            'First_name' => $attributes['firstname'],
            'Last_name' => $attributes['lastname'],
            'Number' => $attributes['number'],
            'Company' => $attributes['company']
        ]);

        return redirect('/home');
    }
}
