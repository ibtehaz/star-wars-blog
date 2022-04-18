<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    //
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email'=>'required|email'
        ]);
        
     
         try {
             $newsletter->subscribe(request('email'));
         }
         catch (\Exception $e) {
            throw ValidationException::withMessages([
                'email' => ['The email has already joined our newsletter.'],
            ]);
            

         }
         return redirect('/')->with('success', 'Thanks for subscribing!');
    }
}
