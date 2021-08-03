<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Newsfeed;

class NewsfeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  

        $newsfeeds=Newsfeed::first();
        return view('Newsfeed.create',compact('newsfeeds'));
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
            'imgnewsfeed'=>'required',
            'mytextarea'=>'required '


        ]);
       $newsfeed= new Newsfeed;
       $newsfeed->title=$request->title;
       $newsfeed->imgnewsfeed=$request->imgnewsfeed;
       $newsfeed->mytextarea=$request->mytextarea;
       if($request->file('imgnewsfeed'))
         {
            $img_file=$request->file('imgnewsfeed');
            $img_file->storeAs('public/Newsfeedimg/','imgnewsfeed.'.$img_file->getClientOriginalExtension());
            $newsfeed->imgnewsfeed='storage/Newsfeedimg/imgnewsfeed.'.$img_file->getClientOriginalExtension();


         }
       $newsfeed->save();

       return redirect()->route('NewsfeedCreate')->with('success','News Feed Create Successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $newsfeeds=Newsfeed::paginate(3);
       return view('Newsfeed.list',compact('newsfeeds'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $newsfeeds=Newsfeed::find($id);
     return view('Newsfeed.edit',compact('newsfeeds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'imgnewsfeed'=>'required',
            'mytextarea'=>'required|string'


        ]);
        $newsfeed=Newsfeed::find($id);
       $newsfeed->title=$request->title;
       $newsfeed->imgnewsfeed=$request->imgnewsfeed;
       $newsfeed->mytextarea=$request->mytextarea;
       if($request->file('imgnewsfeed'))
         {
            $img_file=$request->file('imgnewsfeed');
            $img_file->storeAs('public/Newsfeedimg/','imgnewsfeed.'.time().$img_file->getClientOriginalExtension());

            $newsfeed->imgnewsfeed='storage/Newsfeedimg/imgnewsfeed.'.time().$img_file->getClientOriginalExtension();


         }
       $newsfeed->save();

       return redirect()->route('NewsfeedList')->with('success','News Feed Update Successfully.');



     
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $Newsfeed=Newsfeed::find($id);
        $Newsfeed->delete();
        return redirect()->route('NewsfeedList')->with('success','News Feed Deleted successfully');
      
    }
}
