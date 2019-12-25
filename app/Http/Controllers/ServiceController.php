<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(15);
        return view('services', ['services' => $services]);
    }

    public function contact(){
        return view('contact');
    }


    public function add()
    {
        return view('addservice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){

        $request->validate([
            'searchfor'=>'required',
            'location' => 'required',
        ]);

        $searchfor = $request->input('searchfor');
        $location = $request->input('location');

        $services = Service::where('category', 'like', "%$searchfor%")->where('city', 'like', "%$location%")->get();
        return view('searchresults')->with('services', $services);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required|email',
            'contact' => 'required|max:11',
            'address' => 'required',
            'city' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $service = new Service();

        $service->name = $request->input('name');
        $service->email = $request->input('email');
        $service->contact = $request->input('contact');
        $service->address = $request->input('address');
        $service->city = $request->input('city');
        $service->category = $request->input('category');
        $service->description = $request->input('description');
       // $service->image = $request->input('image');
       if($request->hasfile('image')){
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $filename = time() . "." . $extension;
           $file->storeAs('uploads/service/', $filename);
           $service->image = $filename;
       }else{
           return $request;
           $service->image = '';
       }

       $service->save();
       return back()->with('success', 'Service Provider Registered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($service)
    {
        $services = Service::find($service);
        return view('servicedetails', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
