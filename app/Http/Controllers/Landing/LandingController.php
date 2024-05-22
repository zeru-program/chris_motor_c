<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // landing page index
    public function indexHome()
    {
       // return "sukes";
       return view('landing-page.home');
    }

    public function indexBlog()
    {
       // return "sukes";
       return view('landing-page.blog');
    }
   
    public function indexAbout()
    {
        
        //return "sukes";
       return view('landing-page.about-us');
    }
  
    public function indexContact()
    {
       // return "sukes"
       return view('landing-page.contact-us');
    }
     // landing page index


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
