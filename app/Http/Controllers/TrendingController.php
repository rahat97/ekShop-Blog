<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trending;

class TrendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('Trending.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $trending=Trending::first();
        return view('Trending.create',compact('trending'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'imgTrending'=>'required|image',
            'mytextarea'=>'required '


        ]);
       $trending= new Trending;
       $trending->title=$request->title;
       $trending->imgTrending=$request->imgTrending;
       $trending->mytextarea=$request->mytextarea;
       if($request->file('imgTrending'))
         {
            $img_file=$request->file('imgTrending');
            $img_file->storeAs('public/ImgTrending/','imgTrending.'.time().$img_file->getClientOriginalExtension());
            $trending->imgTrending='storage/ImgTrending/imgTrending.'.time().$img_file->getClientOriginalExtension();


         }
       $trending->save();

       return redirect()->route('trending.create')->with('success','News Trending Create Successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {    $trendings=Trending::all();
       
        return view('Trending.list',compact('trendings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trendings=Trending::find($id);
     return view('trending.edit',compact('trendings'));
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
        $this->validate($request,[
            'title'=>'required|string',
            'imgTrending'=>'required|image',
            'mytextarea'=>'required '


        ]);
       $trendings=Trending::find($id);
       $trendings->title=$request->title;
       $trendings->imgTrending=$request->imgTrending;
       $trendings->mytextarea=$request->mytextarea;
       if($request->file('imgTrending'))
         {
            $img_file=$request->file('imgTrending');
            $img_file->storeAs('public/ImgTrending/','imgTrending.'.time().$img_file->getClientOriginalExtension());
            $trendings->imgTrending='storage/ImgTrending/imgTrending.'.time().$img_file->getClientOriginalExtension();


         }
       $trendings->save();

       return redirect()->route('trending.list')->with('success',' Trending Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trendings=Trending::find($id);
        $trendings->delete();
        return redirect()->route('trending.list')->with('success','Trending Deleted successfully');
    }
}
