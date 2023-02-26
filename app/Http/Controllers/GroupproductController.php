<?php

namespace App\Http\Controllers;

use App\groupproduct;
use Illuminate\Http\Request;

class GroupproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodgroup = groupproduct::all();
        return view('groupproduct',compact('prodgroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creategroup');
        
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
            'groupprod'=>'required'
            ]);
            
            groupproduct::create([
                'product_group'=> $request->input('groupprod')
            ]);
            return redirect('groupproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\groupproduct  $groupproduct
     * @return \Illuminate\Http\Response
     */
    public function show(groupproduct $groupproduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\groupproduct  $groupproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(groupproduct $groupproduct)
    {
        $prodgroup = groupproduct::find($id); 
        return view('editgroup',compact('groupprod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\groupproduct  $groupproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prodgroup = groupproduct::find($id);
        $prodgroup->product_group = $request->input('prodgroup');
        $prodgroup->save();
        return redirect('groupproduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\groupproduct  $groupproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prodclass = groupproduct::find($id);
        $prodclass->delete();
        return redirect('groupproduct');
    }
}
