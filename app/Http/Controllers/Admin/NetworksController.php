<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Networks\CreateNetworkRequest;
use App\Http\Requests\Networks\UpdateNetworkRequest;
use App\Network;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class NetworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $networks = Network::all();
        return view('admin.networks.index', compact('networks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.networks.add-edit');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateNetworkRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNetworkRequest $request)
    {
        $request = $this->saveFiles($request);
        Network::create($request->only(['name', 'website', 'image']));
        Session::flash('success', 'Added Successfully');
        return redirect(route('networks.index'));
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
        $network = Network::findOrFail($id);
        return view('admin.networks.add-edit', compact('network'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNetworkRequest $request, $id)
    {
        $network = Network::findOrFail($id);
        $request = $this->saveFiles($request);
        $network->update($request->only(['name', 'website', 'image']));
        Session::flash('success', 'Edited Successfully');
        return redirect(route('networks.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if($id == 'mass'){
            if ($request->filled('ids'))
                Network::destroy($request->ids);
        }
        else
            Network::destroy($id);
        Session::flash('success', 'Deleted Successfully');
        return redirect(route('networks.index'));
    }
}
