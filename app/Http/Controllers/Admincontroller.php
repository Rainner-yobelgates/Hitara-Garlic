<?php

namespace App\Http\Controllers;

use App\Store;
use App\Banner;
use App\Video;
use App\AboutGarlic;
use App\AboutHitara;
use App\Gallery;
use App\Event;
use App\Recipe;
use App\Visitor;
use App\ContactUs;
use App\OurContact;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    //Dashboard
    public function dashboard()
    {
        $this->authorize('admin');
        $jan = 0;
        $feb = 0;
        $mar = 0;
        $apr = 0;
        $mei = 0;
        $jun = 0;
        $jul = 0;
        $aug = 0;
        $sep = 0;
        $okt = 0;
        $nov = 0;
        $des = 0;

        foreach (Visitor::all() as $visitor) {
            $date = $visitor->created_at;;
            switch ($date->format('m-Y')) {
                case '01-' . date('Y'):
                    $jan++;
                    break;
                case '02-' . date('Y'):
                    $feb++;
                    break;
                case '03-' . date('Y'):
                    $mar++;
                    break;
                case '04-' . date('Y'):
                    $apr++;
                    break;
                case '05-' . date('Y'):
                    $mei++;
                    break;
                case '06-' . date('Y'):
                    $jun++;
                    break;
                case '07-' . date('Y'):
                    $jul++;
                    break;
                case '08-' . date('Y'):
                    $aug++;
                    break;
                case '09-' . date('Y'):
                    $sep++;
                    break;
                case '10-' . date('Y'):
                    $okt++;
                    break;
                case '11-' . date('Y'):
                    $nov++;
                    break;
                case '12-' . date('Y'):
                    $des++;
                    break;
            }
        }
        $visitor = Visitor::count();
        $gallery = Gallery::count();
        $recipe = Recipe::count();
        $contactUs = ContactUs::count();
        return view('admin.dashboard.index', compact('visitor', 'gallery', 'recipe', 'contactUs', 'jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'des'));
    }


    //About Hitara
    public function about_hitara()
    {
        $this->authorize('admin');

        $abouthitara = AboutHitara::get();
        return view('admin.about_hitara.index', compact('abouthitara'));
    }
    public function postabout_hitara(Request $request)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'title' => 'required',
            'img' => 'required|mimes:jpg,png,jpeg,gif',
            'description' => 'required'
        ]);

        $img = $request->file('img');
        $filename = rand(0000, 9999) . '-' . $img->getClientOriginalName();
        $img->move('./img/hitara', $filename);

        $request['image'] = $filename;
        AboutHitara::create($request->all());

        return redirect('/backend-panel/about/hitara')->with('add', 'About Hitara added successfully');
    }
    public function edit_hitara(AboutHitara $aboutHitara)
    {
        $this->authorize('admin');

        return view('/admin.about_hitara.edit', compact('aboutHitara'));
    }
    public function update_hitara(Request $request, AboutHitara $aboutHitara)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'img' => 'mimes:jpg,png,jpeg,gif',
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('img')) {

            unlink('img/hitara/' . $aboutHitara->image);

            $img = $request->file('img');
            $filename = rand(0000, 9999) . '-' . $img->getClientOriginalName();
            $img->move('./img/hitara/', $filename);

            $aboutHitara->image = $filename;
        }
        $aboutHitara->update($request->all());
        return redirect('/backend-panel/about/hitara')->with('update', 'About Hitara updated successfully');
    }
    public function detail_hitara(AboutHitara $aboutHitara)
    {
        $this->authorize('admin');

        return view('admin.about_hitara.detail', compact('aboutHitara'));
    }
    public function delete_hitara(AboutHitara $aboutHitara)
    {
        $this->authorize('admin');

        unlink('img/hitara/' . $aboutHitara->image);

        $aboutHitara->delete();
        return redirect('/backend-panel/about/hitara')->with('delete', 'About Hitara deleted successfully');
    }


    //Gallery
    public function gallery()
    {
        $this->authorize('admin');
        $galleries = gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }
    public function postgallery(Request $request)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'img' => 'required|mimes:jpg,png,jpeg,gif'
        ]);

        $img = $request->file('img');
        $filename = $img->getClientOriginalName();
        $img->move('./img/gallery', $filename);

        $request['image'] = $filename;
        Gallery::create($request->all());

        return redirect('/backend-panel/gallery')->with('add', 'Image added successfully');
    }
    public function delete_gallery(Gallery $gallery)
    {
        $this->authorize('admin');

        unlink('img/gallery/' . $gallery->image);

        $gallery->delete();
        return redirect('/backend-panel/gallery')->with('delete', 'Image deleted successfully');
    }


    //Event
    public function event()
    {
        $this->authorize('admin');

        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }
    public function postevent(Request $request)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'name' => 'required',
            'img' => 'required|mimes:jpg,png,jpeg,gif',
            'description' => 'required'
        ]);

        $img = $request->file('img');
        $filename = rand(0000, 9999) . '-' . $img->getClientOriginalName();
        $img->move('./img/event', $filename);

        $request['image'] = $filename;
        Event::create($request->all());
        return redirect('/backend-panel/event')->with('add', 'Event added successfully');
    }
    public function detail_event(Event $event)
    {
        $this->authorize('admin');

        return view('admin.event.detail', compact('event'));
    }
    public function delete_event(Event $event)
    {
        unlink('img/event/' . $event->image);

        $event->delete();
        return redirect('/backend-panel/event')->with('delete', 'Event deleted successfully');
    }
    public function edit_event(Event $event)
    {
        $this->authorize('admin');

        return view('admin.event.edit', compact('event'));
    }
    public function update_event(Request $request, Event $event)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'img' => 'mimes:jpg,png,jpeg,gif',
            'name' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('img')) {
            unlink('img/event/' . $event->image);

            $img = $request->file('img');
            $filename = rand(0000, 9999) . '-' . $img->getClientOriginalName();
            $img->move('./img/event/', $filename);

            $event->image = $filename;
        }
        $event->update($request->all());
        return redirect('/backend-panel/event')->with('update', 'Event updated successfully');
    }


    //Recipe
    public function recipe()
    {
        $this->authorize('admin');

        $recipes = Recipe::all();
        return view('admin.recipe.index', compact('recipes'));
    }
    public function postrecipe(Request $request)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'name' => 'required',
            'img' => 'required|mimes:jpg,png,jpeg,gif',
            'description' => 'required'
        ]);

        $img = $request->file('img');
        $filename = rand(0000, 9999) . '-' . $img->getClientOriginalName();
        $img->move('./img/recipe', $filename);

        $request['image'] = $filename;
        dd($request['image']);
        Recipe::create($request->all());
        return redirect('/backend-panel/recipe')->with('add', 'Recipe added successfully');
    }
    public function detail_recipe(Recipe $recipe)
    {
        $this->authorize('admin');

        return view('admin.recipe.detail', compact('recipe'));
    }
    public function delete_recipe(Recipe $recipe)
    {
        $this->authorize('admin');

        unlink('img/recipe/' . $recipe->image);

        $recipe->delete();
        return redirect('/backend-panel/recipe')->with('delete', 'Recipe deleted successfully');
    }
    public function edit_recipe(Recipe $recipe)
    {
        $this->authorize('admin');

        return view('admin.recipe.edit', compact('recipe'));
    }
    public function update_recipe(Request $request, Recipe $recipe)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'img' => 'mimes:jpg,png,jpeg,gif',
            'name' => 'required',
            'description' => 'required',
        ]);
        if ($request->hasFile('img')) {
            unlink('img/recipe/' . $recipe->image);

            $img = $request->file('img');
            $filename = rand(0000, 9999) . '-' . $img->getClientOriginalName();
            $img->move('./img/recipe', $filename);

            $recipe->image = $filename;
        };
        $recipe->update($request->all());
        return redirect('/backend-panel/recipe')->with('update', 'Recipe updated successfully');
    }


    //Contact Us
    public function contactUs()
    {
        $this->authorize('admin');

        $contacts = ContactUs::all();
        return view('admin.contact.index', compact('contacts'));
    }
    public function delete_contact(ContactUs $contactUs)
    {
        $this->authorize('admin');

        $contactUs->delete();
        return redirect('/backend-panel/contactUs')->with('delete', 'Data deleted successfully');
    }
    public function detail_contact(Request $request)
    {
        $this->authorize('admin');

        $contacts = ContactUs::where('id', $request->id)->get();
        foreach ($contacts as $contact) {
            echo '<div class="modal-header">
            <h5 class="modal-title text-bold" id="exampleModalLabel">Detail Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <p class="text-bold">From</p>
                <p> <span class="text-bold">Name :</span> <br>' . $contact->name . '</p>
                <p> <span class="text-bold">Email :</span> <br>' . $contact->email . '</p>
                <p> <span class="text-bold">Subject :</span> <br>' . $contact->subject . '</p>
                <p> <span class="text-bold">Message :</span> <br>' . $contact->message . '</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>';
        }
    }


    //Setting
    public function setting()
    {
        $this->authorize('admin');

        $contact = OurContact::first();
        $store = Store::first();
        $banner = Banner::first();
        $video = Video::first();
        $aboutgarlic = AboutGarlic::first();
        $abouthitara = AboutHitara::first();
        return view('admin.setting.index', compact('contact', 'store', 'banner', 'video', 'abouthitara', 'aboutgarlic'));
    }
    public function setcontact(Request $request, OurContact $ourContact)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'whatsapp' => 'required|min:10|integer',
            'instagram' => 'required',
            'email' => 'required|email',
            'twitter' => 'required',
            'facebook' => 'required',
        ]);

        $ourContact->update($request->all());
        return redirect('/backend-panel/setting')->with('updatecontact', 'Contact updated successfully');
    }
    public function setstore(Request $request, Store $store)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'shopee' => 'required',
            'tokopedia' => 'required',
            'alibaba' => 'required',
            'blibli' => 'required',
        ]);

        $store->update($request->all());
        return redirect('/backend-panel/setting')->with('updatestore', 'Store updated successfully');
    }
    public function setbanner(Request $request, Banner $banner)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'img' => 'required|mimes:jpg,png,jpeg,gif',
        ]);
        unlink('img/banner/' . $banner->image);

        $img = $request->file('img');
        $filename = $img->getClientOriginalName();
        $img->move('./img/banner', $filename);

        $request['image'] = $filename;
        $banner->update($request->all());
        return redirect('/backend-panel/setting')->with('updatebanner', 'Image updated successfully');
    }
    public function setvideo(Request $request, Video $video)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'link' => 'required',
        ]);
        $video->update($request->all());
        return redirect('/backend-panel/setting')->with('updatevideo', 'Video updated successfully');
    }
    public function setabout_garlic(Request $request, AboutGarlic $aboutGarlic)
    {
        $this->authorize('admin');

        $this->validate($request, [
            'title1' => 'required',
            'title2' => 'required',
            'description1' => 'required',
            'description2' => 'required'
        ]);
        $aboutGarlic->update($request->all());
        return redirect('/backend-panel/setting')->with('updateaboutgarlic', 'About Garlic updated successfully');
    }
}
