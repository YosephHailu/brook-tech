<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'update', 'delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Client::orderByDesc('created_at')->orderByDesc('updated_at');
        return view('client.client')->with('clients', $clients->get());
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
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            //get file name with extension
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            //Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //File extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('photo')->storeAs('public/client/', $fileNameToStore);
        } else {
            $fileNameToStore = 'placeholder.png';
        }

        $request->request->add(['image' => $fileNameToStore]);

        Client::create($request->all());

        return redirect()->back()->with('success', 'Successfully registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
        $clients = Client::query();

        return view('client.client')->with(['client' => $client, 'clients' => $clients->paginate(15)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
        $this->validate($request, [
            'name' => 'required',
        ]);


        if ($request->hasFile('photo')) {
            //get file name with extension
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            //Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //File extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('photo')->storeAs('public/client/', $fileNameToStore);
        } else {
            $fileNameToStore = $client->image;
        }

        $request->request->add(['image' => $fileNameToStore]);

        $client->update($request->all());

        return redirect()->back()->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
        $client->delete();

        return redirect('/client')->with('success', 'Successfully deleted');
    }
}
