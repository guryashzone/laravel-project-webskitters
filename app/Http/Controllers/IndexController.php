<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\travel;
use App\booking;
use App\contact;
use Auth;
class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function search(Request $request)
    {
        if( $request->ajax() ){
            return Response(Travel::all());
        }
    }
    public function contact()
    {
        return view('contact');
    }
     public function offers()
    {
        return view('offers');
    }
   
    public function packageView(Travel $id)
    {
        return view('packageView')->with('package',$id);
    }
    public function book()
    {
        // dd(request()->all());
        $this->validate(request(), [
            'package_name' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'adults' => 'required',
            'children' => 'required',
        ]);
        $id = Auth::id();
        $data = request()->all();
        $pack = new Booking();
        $pack->package_name = $data['package_name'];
        $pack->user_id = $id;
        $pack->check_in = $data['check_in'];
        $pack->check_out = $data['check_out'];
        $pack->adults = $data['adults'];
        $pack->children = $data['children'];
        $pack->save();  
        session()->flash('success','Booking confirmed..');
        return redirect('/bookings');
    }
    public function show()
    {
        $id = Auth::id();
        $data = Booking::all()->where('user_id',$id);
        return view('/bookings')->with('packages',$data);
    }
    public function contact_form(  ){
        $this->validate(request(), [
            'customer_name' => 'required',
            'customer_email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data = request()->all();
        $contact = new Contact;
        $contact->customer_name = $data['customer_name'];
        $contact->customer_email = $data['customer_email'];
        $contact->subject = $data['subject'];
        $contact->message = $data['message'];
        $contact->save();
        session()->flash('success','Your interest is appreciated! We will contact you within 24 hrs.');
        return redirect('/contact');
    }
}