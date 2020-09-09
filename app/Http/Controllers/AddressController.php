<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Address;

class AddressController extends Controller
{
    public function index(){

        $addresses = Address::paginate(5);
        // dd($addresses);
        return view('address.index',compact('addresses'));
    }

    public function create(){
        return view('frontend.address.create');
    }

    public function store(Request $request)
    {
       //dd($request->all());
        //  $request->validate([
        //      'user_id'=>'required',
        //      'address1' => 'required',
        //      'city' => 'required',
        //      'state' => 'required',
        //      'country' => 'required',
        //      'zip' => 'required',

        //  ]);
  
        Address::create(
            [
                'address1'=>$request->address1,
                'address2'=>$request->address2,
                'city'=>$request->city,
                'state'=>$request->state,
                'country'=>$request->country,
                'zip'=>$request->zip,
            ]
        );
   
        return redirect()->route('address.index')
                        ->with('success','Address created successfully.');
    }

  /**
     * Display the specified resource.
     *
     * @param  \App\Address  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        return view('address.show',compact('address'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        return view('address.edit',compact('address'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip' => 'required',

        ]);
  
        $address->update($request->all());
  
        return redirect()->route('address.index')
                        ->with('success','Address updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $address)
    {
        $address->delete();
  
        return redirect()->route('address.index')
                        ->with('success','Address deleted successfully');
    }
}