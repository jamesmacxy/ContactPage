<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Http\Requests\ContactPageRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactPageRequest $request)
    {

        // dd($request->all());

        $data = $request->all();

        // save
        Contact::create($data);
 
 
        //send email
        Mail::send('emails.test', $data, function($message){

            $message->to('jamesmacxy@gmail.com', 'James')->subject('Haznepz Inquiry');
        });
 
        return redirect()->back();
 
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
        //
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
        //
    }

    public function mail()
    {
        // $data = [
        // 'title' => 'Title Test',
        // 'content' => 'This is test content from James',

        // ];

        // Mail::send('emails.test', $data, function($message){

        //     $message->to('jamesmacxy@gmail.com', 'James')->subject('Test Subject');
        // });
    }
}
