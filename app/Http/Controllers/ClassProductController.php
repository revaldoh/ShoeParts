<?php

namespace App\Http\Controllers;

use App\classproduct;
use Illuminate\Http\Request;

class ClassProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodclass = classproduct::all();
        return view('classproduct',compact('prodclass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createclass');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
        'classprod'=>'required'
        ]);
        
        classproduct::create([
            'product_class'=> $request->input('classprod')
        ]);
        return redirect('classproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\classproduct  $classproduct
     * @return \Illuminate\Http\Response
     */
    public function show(classproduct $classproduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\classproduct  $classproduct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodclass = classproduct::find($id); 
        return view('editclass',compact('prodclass'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\classproduct  $classproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prodclass = classproduct::find($id);
        $prodclass->product_class = $request->input('classprod');
        $prodclass->save();
        return redirect('classproduct');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\classproduct  $classproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prodclass = classproduct::find($id);
        $prodclass->delete();
        return redirect('classproduct');
       
    }
}
