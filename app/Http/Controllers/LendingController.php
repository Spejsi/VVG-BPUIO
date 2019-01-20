<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $lendings = \App\Lending::paginate();
        $lendings = \App\Lending::with('movie')->paginate();
        $lendings = \App\Lending::with('client')->paginate();
        return view('lendings/index', ['lendings' => $lendings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = \App\Movie::all();
        $clients = \App\Client::all();
        return view('lendings/create', ['movies' => $movies, 'clients' => $clients]);
        // return view('lendings/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'lending_date' => 'required',
            'client_id' => 'required',
            'movie_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('LendingController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\Lending::create($data);
        return redirect()->action('LendingController@index');
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
        \App\Lending::destroy($id);
        return redirect()->action('LendingController@index');
    }
}
