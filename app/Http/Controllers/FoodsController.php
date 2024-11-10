<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\foods;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $foods = foods::all();

        return view("Foods.index",compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Foods.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Price' => 'required|string|max:255',
        ]);
        // ذخیره داده‌ها در پایگاه داده
        foods::create([
            'Name' => $request->input('Name'),
            'Price' => $request->input('Price')
        ]);
        // ریدایرکت به صفحه‌ای مشخص
        return redirect()->route('foods.create');
    }

    public function show(foods $food): View
    {
        return view("Foods.show",compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(foods $food)
    {
        return view("Foods.edit",compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, foods $food)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Price' => 'required|string|max:255',
        ]);

        $food["Name"] = $request->input('Name');
        $food["Price"] = $request->input('Price');
        $food->save();

        return redirect()->route('foods.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(foods $food)
    {
        $food->delete();
        return redirect()->route('foods.index');
    }
}
