<?php

namespace App\Http\Controllers\Admin;

use App\DataType;
use App\Http\Requests\DataTypes\UpdateDataTypeRequest;
use App\Http\Requests\DataTypes\CreateDataTypeRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class DataTypesController extends Controller
{
    public $permissions = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_types = DataType::all();
        return view('admin.data_types.index', compact('data_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_types.add-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDataTypeRequest $request)
    {
        $permissions = array_sum($request->permissions);
        DataType::create(['name'=>$request->name, 'permissions' => $permissions]);
        Session::flash('success', 'Added Successfully');
        return redirect(route('data_types.index'));
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
        $data_type = DataType::findOrFail($id);
        $this->getPermissions($data_type->permissions);
        $data_type->permissions = $this->permissions;
        return view('admin.data_types.add-edit', compact('data_type'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataTypeRequest $request, $id)
    {
        $data_type = DataType::findOrFail($id);
        $permissions = array_sum($request->permissions);
        $data_type->update(['name'=>$request->name, 'permissions'=>$permissions]);
        Session::flash('success', 'Edited Successfully');
        return redirect(route('data_types.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if($id == 'mass')
            if ($request->filled('ids'))
                DataType::destroy($request->ids);
        else
            DataType::destroy($id);
        Session::flash('success', 'Deleted Successfully');
        return redirect(route('data_types.index'));
    }
    public function getPermissions($num){
        $result = [];
        if($num / 8 >= 1){
            array_push($result, 8);
            $num -= 8;
        }
        if($num / 4 >= 1){
            array_push($result, 4);
            $num -= 4;
        }
        if($num / 2 >= 1){
            array_push($result, 2);
            $num -= 2;
        }
        if($num / 1 >= 1){
            array_push($result, 1);
        }
        $this->permissions = $result;
    }
}
