<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailModel;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Email.Email');
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
       $this->validate($request,[
            'subscribeEmail'=> 'required|Email',
       ]);

       $emailModels= new EmailModel;
       $emailModels -> subscribeEmail = $request-> subscribeEmail;

       $emailModels-> save();
       return redirect()-> route('index')->with('success','Subscription Sucessfully Done!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $emailModels =EmailModel::all(); 
        return view('Email.Email', compact('emailModels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Email($id)
    {
        $emailModels =   EmailModel::find($id);
        return view('Email.SendEmail',compact('emailModels'));

        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emailModels= EmailModel::find($id);
        $emailModels->delete();
        return redirect()->route('SubscribeEmailShow')->with('Success','Subscirbed Email deleted Successfully');

    }
}
