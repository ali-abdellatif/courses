<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use App\Models\Course;
use App\Models\Event;
use App\Models\Message;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function home()
    {
        $events = Event::all();
        return view('front.home',compact('events'));
    }


    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function contactPost(Request $request)
    {
        $this->validate($request, [
            'name'              =>       'required',
            'email'             =>       'required',
            'message'           =>       'required'
        ]);


        $contact =Message::create($request->all());
        return back();
    }

    public function course()
    {
        $categories = Category::all();
        $courses = Course::all();
        return view('front.course',compact(['categories','courses']));
    }

    public function subCategory($id)
    {
        $courses= Course::find($id);
        $categories = Category::all();
        return view('front.courses',compact(['categories','courses']));
    }

    public function booking($id)
    {
        $course = Course::find($id);
        return view('front.booking',compact('course'));
    }

    public function lesson()
    {
        return view('front.lesson');
    }
}
