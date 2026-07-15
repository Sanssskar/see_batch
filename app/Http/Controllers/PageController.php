<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        $courses = Course::all();
        return view('home', compact('courses'));
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {

        return view('service');
    }
    public function contact()
    {

        return view('contact');
    }

    public function contact_store(Request $request)
    {

        $contact = new Contact();
        $contact->name = $request->full_name;
        $contact->phone = $request->number;
        $contact->address = $request->address;
        $contact->message = $request->message;
        $file = $request->image;
        if($file){
            $file_name = time().".".$file->getClientOriginalExtension(); //code.webp 
            $file->move('storage', $file_name);
            $contact->image = $file_name;
        }
        $contact->save();
        toast("Form Submitted Sucessfully", "success");
        return redirect('contact');
    }
}
