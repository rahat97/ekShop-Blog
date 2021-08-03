<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopStore;

class TopStoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topStories=TopStore::first();
        return view('TopStories.create',compact('topStories'));
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        
        // dd($request->all());
        
         $this->validate($request,[
             'title'=>'required',
             'photo'=>'required',
            'text'=>'required '


         ]);
         $topStories = new TopStore();
         $topStories->title = $request['title'];
         $topStories->photo= $request['photo'];
         $topStories->text = $request['text'];

    //    $topStories->save();
    //    $topStories->photo=$request->photo;
    
       if($request->file('photo'))
         {   $img_file=$request->file('photo');
              $img_file->storeAs('public/Photo/','photo.'.time().$img_file->getClientOriginalExtension());
              $topStories->photo='storage/Photo/photo.' .time().$img_file->getClientOriginalExtension();








            // $path=$request->file('topStories')->store('public/storage/ImgTopStories');
            //$topStories->photo = $request->file('photo')->storeAs('public/ImgTopStories', rand(100,900).'.jpg');
            // $img_file=$request->file('topStories');
            // $img_file->storeAs('public/ImgTopStories/','imgTopStories.'.$img_file->getClientOriginalExtension());
            // $topStories->imgTopStories='storage/ImgTopStories/imgTopStories.'.$img_file->getClientOriginalExtension();


         }
       $topStories->save();

       return redirect()->route('TopStories.create')->with('success','Top Stories Create Successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $topStories=TopStore::all();
        
        return view('TopStories.list')->with('topStories', $topStories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topStories =TopStore::find($id);
    
        return view('TopStories.edit',compact('topStories'));
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
            'photo'=>'required',
            'text'=>'required '


        ]);
                $topStories =TopStore::find($id);
                $topStories->title=$request->title;
                $topStories->photo=$request->photo;
                $topStories->text=$request->text;
        if($request->file('photo'))
         {
             $img_file=$request->file('photo');
            $img_file->storeAs('public/Photo/','photo.'.time().$img_file->getClientOriginalExtension());
             $topStories->photo='storage/Photo/photo.'.time().$img_file->getClientOriginalExtension();


         }
       $topStories->save();

       return redirect()->route('TopStories.list')->with('success','Top Stories Updated Successfully.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $topStories =TopStore::find($id);
        $topStories->delete();
        return redirect()->route('TopStories.list')->with('success','Top Stories Deleted successfully');
    }
}
