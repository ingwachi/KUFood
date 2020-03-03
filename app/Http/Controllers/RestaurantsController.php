<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurants.show', ['restaurant' => $restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createMenu($id) {
        $restaurant = Restaurant::find($id);
        return view('restaurants.create',['restaurant' => $restaurant]);
    }

    public function storeMenu(Request $request, $id) {
        $restaurant = Restaurant::find($id);

        $path = $request->file('image')->store('public');
        $menu = new Menu;
        $menu->restaurant_id = $id;
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->type = $request->input('type');
        $menu->image = Storage::url($path);
        $menu->save();
        return redirect()->route('restaurants.show', ['restaurant' => $id]);
    }

    public function editMenu($res_id, $id) {
        $menu = Menu::findOrFail($id);
        return view('restaurants.edit', ['menu' => $menu, 'restaurant' => $res_id]);
    }

    public function updateMenu(Request $request, $res_id, $id) {
        $menu = Menu::findOrFail($id);
        $menu->restaurant_id = $res_id;
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->type = $request->input('type');
        $menu->save();
        return redirect()->route('restaurants.show', ['restaurant' => $res_id]);
    }

    public function deleteMenu($res_id ,$id) {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('restaurants.show', ['restaurant' => $res_id]);
    }
}
