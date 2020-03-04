<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet; // need to pull in out model to use it
use Auth; // need to pull in Auth in order to use it
use App\User;


class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $tweets = Tweet::all();

        $tweets = Tweet::query( )
            ->join( 'users', 'tweets.user_id', '=', 'users.id' ) // faster to do both queries together
            ->get(); // we want them all because we are looping through them in our index


        return view('tweets.index', compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        if ( $user ) // we are logged in and can create posts
            return view('tweets.create');
        else // not logged in, can not make posts. redirect to index
            return redirect('/tweets');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ( $user = Auth::user() ) //only store data if user is logged in. demonstrating differnt way to store user
        {

        $validatedData = $request->validate(array( 
            'message' => 'required|max:255',
           

        ));

        $tweet = new Tweet();
        $tweet->user_id = $user->id;
        $tweet->message = $validatedData['message'];
        $tweet->save();
        
    
         return redirect('/tweets')->with('success', 'Tweet saved.');
        }// redirect by default
         return redirect('/tweets');
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
        $tweet = Tweet::findOrFail($id);

        $tweetUser = $tweet->user()->get()[0];

        return view( 'tweets.show', compact('tweet'), compact('tweetUser') );

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
        if ( $user = Auth::user() ) {
        $tweet = Tweet::findOrFail($id);
        return view( 'tweets.edit', compact('tweet') );
    }
    return redirect('/tweets');
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
        if ( $user = Auth::user() ) {
        $validatedData = $request->validate(array( 
            'message' => 'required|max:255',
         ));

         Tweet::whereId($id)->update($validatedData);
         return redirect('/tweets')->with('success', 'Tweet updated.');
        }
        return redirect('/tweets');
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
        if ( $user = Auth::user() ) {
        $tweet = Tweet::findOrFail($id);

        $tweet->delete();

        return redirect('/tweets')->with('success', 'Tweet deleted.');
    }
    return redirect('/tweets');
}
}