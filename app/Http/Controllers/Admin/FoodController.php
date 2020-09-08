<?php

namespace App\Http\Controllers\Admin;

use App\Food;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $foods = Food::with('image','category')->paginate(5);
        
        return view('admin.food.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category = Category::pluck('title', 'id');

        return view('admin.food.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
       $data = $request->validate([
            'title' => 'required|max:255',
            'category_id'=> 'required',
            'is_veg'=> 'required',
            'is_available'=>'required',
            'price'=>'required',
            'description'=>''
        ]);
        
        $food = Food::create($data);
       
        if ($request->hasFile('image')) {
            $url = str_replace('public/', '',$request->image->store('public/images'));
            $food->image()->create(['url'=>$url,'type'=>'image']);
        }

        return redirect()->route('food.index')->with('success','Food added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        //
        $category = Category::pluck('title', 'id');
        
        return view('admin.food.edit',compact('food','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        //

        $data = $request->validate([
            'title' => 'required|max:255',
            'category_id'=> 'required',
            'is_veg'=> 'required',
            'is_available'=> 'required',
            'price' => 'required',
            'description' => ''
        ]);
        
      
        $food->update($data);

        if ($request->hasFile('image')) {
            $url = str_replace('public/', '',$request->image->store('public/images'));
            $food->image()->create(['url'=>$url,'type'=>'image']);
        }

        return redirect()->route('food.index')->with('success','Food updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
        $food->delete();

        return back()->with('success','Food delete successfully!');
    }
}
