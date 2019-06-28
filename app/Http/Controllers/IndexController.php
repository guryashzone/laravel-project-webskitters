<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\travel;
use App\booking;
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
        $data = request()->all();
        $pack = new Booking();
        $pack->package_name = $data['package_name'];
        $pack->check_in = $data['check_in'];
        $pack->check_out = $data['check_out'];
        $pack->adults = $data['adults'];
        $pack->children = $data['children'];
        $pack->save();  
        session()->flash('success','Booking confirmed..');
        return redirect('/contact');
    }
}