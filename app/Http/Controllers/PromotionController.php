<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions=\App\Promotion::all();
        return view('promotion.promotion_list',compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promotion.create_promotion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
        $promotion= new \App\Promotion;
        $promotion->name=$request->get('name');
        $promotion->normal_price=$request->get('normal_price');
        $promotion->promotion_price=$request->get('promotion_price');
        $promotion->description=$request->get('description');
        $promotion->filename=$name;
        $promotion->save();
        
        return redirect('promotions')->with('success', 'Information has been added');
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
        $promotion = \App\Promotion::find($id);
        return view('promotion.edit_promotion',compact('promotion','id'));
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
        $promotion= \App\Promotion::find($id);
        $promotion->name=$request->get('name');
        $promotion->normal_price=$request->get('normal_price');
        $promotion->promotion_price=$request->get('promotion_price');
        $promotion->description=$request->get('description');
        $promotion->save();
        return redirect('promotions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotion = \App\Promotion::find($id);
        $promotion->delete();
        return redirect('promotions')->with('success','Information has been  deleted');
    }
}
