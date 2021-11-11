<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use App\Recipe;
use App\Gallery;
use App\Visitor;
use App\Event;
use App\Banner;
use App\Video;
use App\AboutGarlic;
use App\AboutHitara;

class Homecontroller extends Controller
{
    public function __construct()
    {
        $visitor = Visitor::where('ip_address', $_SERVER['REMOTE_ADDR'])->first();
        
        if (!$visitor) {
            Visitor::create([
                'ip_address' => $_SERVER['REMOTE_ADDR'],
                'user_agent' => $_SERVER['HTTP_USER_AGENT']
            ]);
        }
    }
    public function home(){
        $events = Event::latest()->get();
        $e = Event::first();
        $banner = Banner::first();
        $video = Video::first();
        $abouthitara = AboutHitara::get();
        $aboutgarlic = AboutGarlic::first();
        return view('home.home.index', compact('e', 'events', 'banner', 'video', 'abouthitara', 'aboutgarlic'));
    }
    public function event(Event $event){
        return view('home.home.event', compact('event'));
    }
    public function about(AboutHitara $aboutHitara){
        $banner = Banner::first();
        $aboutgarlic = AboutGarlic::first();
        return view('home.about.detailAbout', compact('banner', 'aboutHitara', 'aboutgarlic'));
    }
    public function gallery(){
        $galeries = Gallery::all();
        return view('home.gallery.gallery', compact('galeries'));
    }
    public function contact(){
        return view('home.contact.kontak');
    }
    public function message(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        ContactUs::create($request->all());
        return redirect('/contact')->with('add','Message sent successfully');
    }
    public function recipe(){
        $recipes = Recipe::all();
        return view('home.recipe.recipe', compact('recipes'));
    }
    public function detail_recipe(Recipe $recipe){
        return view('home.recipe.detailRecipe', compact('recipe'));
    }
    public function brochure(){
        return view('home.brosur.brosur');
    }
    
}
