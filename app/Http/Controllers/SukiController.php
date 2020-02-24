<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Menu;

class SukiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = (new \App\Restaurant)->getFirstRestaurant();
        $menus = (new \App\Menu)->getAllSukiMenu();
        return view('suki.suki', ['restaurant' => $restaurant, 'menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurant = (new \App\Restaurant)->getFirstRestaurant();
        return view('suki.create', ['restaurant' => $restaurant]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = $_FILES['image']['name'];
        $file_tem_Loc = $_FILES['image']['tmp_name'];
        $file_store = "img/content3/menu/".$file_name;
        move_uploaded_file($file_tem_Loc, $file_store);

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->type = $request->input('type');
        $menu->image = $file_store;
        $menu->save();
        return redirect()->route('content3.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('suki.show', ['menu' => $menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('suki.edit', ['menu' => $menu]);
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
        $menu = Menu::findOrFail($id);
        $menu->restaurant_id = '1';
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->type = $request->input('type');
        $menu->save();
        return redirect()->route('content3.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('content3.index');
    }
}
