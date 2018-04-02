<?php

namespace App\Http\Controllers\Admin;

use App\DataType;
use App\Http\Requests\Menus\CreateMenuRequest;
use App\Http\Requests\Menus\UpdateMenuRequest;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::with('children')->where(['parent_id'=>0])->orderBy('order')->get();
        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::where(['parent_id'=>0])->get();
        $data_types = DataType::all();
        return view('admin.menus.add-edit', compact('menus', 'data_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMenuRequest $request)
    {
        Menu::create($request->except(['_token']));
        Session::flash('success', 'Added Successfully');
        return redirect(route('menus.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $menus = Menu::where(['parent_id'=>0])->get();
        $data_types = DataType::all();
        return view('admin.menus.add-edit', compact('menus', 'data_types', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuRequest $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->except(['_token']));
        Session::flash('success', 'Edited Successfully');
        return redirect(route('menus.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);
        Session::flash('success', 'Deleted Successfully');
        return redirect(route('menus.index'));
    }
}
