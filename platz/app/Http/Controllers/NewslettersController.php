<?php

   namespace App\Http\Controllers;
   use Illuminate\Http\Request;
   use App\Http\Models\Newsletter as NewslettersMdl;
   use Illuminate\Support\Facades\View;
   use App\Newsletter;

   /**
    * Controlleur des ajouts à la newsletter.
    */
   class NewslettersController extends Controller{

     /**
      * Montre le formulaire pour créer une nouvelle inscription.
      * @return Response
      */
     public function create(){
       return view('newsletters.create');
     }

     /**
      * Stocker une inscription nouvellement créée dans le base de donnée
      * @param  Request $request
      * @return Response
      */
     public function store(Request $request) {
       /* Validation email */
       $validatedData = $request->validate([
       'email' => 'required|max:255|email',
       ]);

       $newsletter = new Newsletter;
       $newsletter->mail = $request['email'];
       $newsletter->save();

       return redirect(action('RessourcesController@index'))->with('success', 'L\'email a bien été enregistré');
     }

   }
