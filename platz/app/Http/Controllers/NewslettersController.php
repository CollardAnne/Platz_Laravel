<?php

   namespace App\Http\Controllers;
   use Illuminate\Http\Request;
   use App\Http\Models\Newsletter as NewslettersMdl;
   use Illuminate\Support\Facades\View;
   use App\Newsletter;

   class NewslettersController extends Controller{

     public function create(){

       return view('newsletters.create');
     }

       public function store(Request $request)
       {
          $validatedData = $request->validate([
          'email' => 'required|max:255|email',
          ]);

           $newsletter = new Newsletter;
           $newsletter->mail = $request['email'];
           $newsletter->save();

           return redirect(action('RessourcesController@index'))->with('success', 'L\'email a bien été enregistré');
       }
   }
