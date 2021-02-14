<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\category;
use App\descriptions;

class DescriptionsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['descriptions'] = Descriptions::paginate(4);
        return view('admin.descriptions.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.descriptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Descriptions $descriptions)
    {
        if ($request->image->getClientOriginalName()) {
            $ext =$request->image->getClientOriginalExtension();
            $file = date('YmdHmis').rand(1,9999).'.'.$ext;
            $request->image->storeAs('public/Descriptions',$file);
        }
        else
        {
            if (!$descriptions->image)
            $file = '';
            else
            $file = $descriptions->image;
        }
   $descriptions->type=$request->type;
   $descriptions->price=$request->price;
   $descriptions->image=$request->image;
   $descriptions->description=$request->description;
   $descriptions->save();
   return redirect()->route('admin.descriptions.index');
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
    public function edit(Descriptions $descriptions)
    {
     $arr['descriptions'] = $descriptions;
     return view('admin.descriptions.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, descriptions $descriptions)
    {
        if(isset($request->image) && ($request->image->getClientOriginalName())) {
            $ext =$request->image->getClientOriginalExtension();
            $file = date('YmdHmis').rand(1,9999).'.'.$ext;
            $request->image->storeAs('public/Descriptions',$file);
        }
        else
        {
            $file = '';
        }
   $descriptions->type=$request->type;
   $descriptions->price=$request->price;
   $descriptions->image=$request->image;
   $descriptions->description=$request->description;
   $descriptions->save();
   return redirect()->route('admin.descriptions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('admin.descriptions.index');
    }
}
