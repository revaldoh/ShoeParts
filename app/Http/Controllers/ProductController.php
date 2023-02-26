<?php

namespace App\Http\Controllers;

use App\product;
use App\classproduct;
use App\groupproduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = product::all();
        $prodclass = classproduct::all();
        $prodgroup = groupproduct::all();
        return view('product',compact('prod','prodclass','prodgroup'));
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
        $request->validate([
            'nama'=>'required',
            'prodclass'=>'required',
            'prodgrouop'=>'required',
            'harga'=>'required',
            'qty'=>'required',
            'img'=>'mimes:jpeg,jpg,png'
            ]);

            $imgName = $request ->img->getClientOriginalName(). '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('image'),$imgName);
            product::create([
                'nama'=> $request->input('nama'),
                'product_class'=> $request->input('prodclass'),
                'product_group'=> $request->input('prodgrouop'),
                'harga'=> $request->input('harga'),
                'qty'=> $request->input('qty'),
                'img'=> $imgName,
                'deskripsi'=> $request->input('desc')
            ]);

            return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = product::find($id); 
        return view('editprod',compact('prod'));
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
        $imgName = $request ->img->getClientOriginalName(). '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('image'),$imgName);
        $prod = product::find($id);
        $prod->nama = $request->input('nama');
        $prod->product_class = $request->input('prodclass');
        $prod->product_group = $request->input('prodgrouop');
        $prod->harga = $request->input('harga');
        $prod->qty = $request->input('qty');
        $prod->img = $imgName;
        $prod->deskripsi = $request->input('desc');
        $prod->save();
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $prod = product::find($id);
        $file = public_path('/image').$prod->img;
        if (file_exists($file)){
            @unlink($file);
        }
        $prod->delete();
        
        return redirect('product');
    }
}
