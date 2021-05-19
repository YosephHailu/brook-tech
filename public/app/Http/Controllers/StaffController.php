<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
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
        $staffs = Staff::orderByDesc('created_at')->orderByDesc('updated_at');
        return view('about.staff')->with('staffs', $staffs->get());
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
            "job" => 'required',
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
            $path = $request->file('photo')->storeAs('public/staff/', $fileNameToStore);
        } else {
            $fileNameToStore = 'placeholder.png';
        }

        $request->request->add(['image' => $fileNameToStore]);

        Staff::create($request->all());

        return redirect()->back()->with('success', 'Successfully registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
        $staffs = Staff::query();

        return view('about.staff')->with(['staff' => $staff, 'staffs' => $staffs->paginate(15)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            "job" => 'required',
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
            $path = $request->file('photo')->storeAs('public/staff/', $fileNameToStore);
        } else {
            $fileNameToStore = $staff->image;
        }

        $request->request->add(['image' => $fileNameToStore]);

        $staff->update($request->all());

        return redirect()->back()->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
        $staff->delete();

        return redirect('/staff')->with('success', 'Successfully deleted');
    }
}
