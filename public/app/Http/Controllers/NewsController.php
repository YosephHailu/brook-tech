<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        $news = News::orderByDesc('created_at');
        return view('news.news')->with('news', $news->get());
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
            'label' => 'required',
            "message" => 'required',
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
            $path = $request->file('photo')->storeAs('public/news/', $fileNameToStore);
        } else {
            $fileNameToStore = 'placeholder.png';
        }

        $request->request->add(['image' => $fileNameToStore]);
        $request->request->add(['date' => Carbon::now()]);

        News::create($request->all());

        return redirect()->back()->with('success', 'Successfully registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
        $zenas = News::query();

        return view('news.zena')->with(['zena' => $news, 'news' => $zenas->paginate(15)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
        $zenas = News::query();

        return view('news.news')->with(['zena' => $news, 'news' => $zenas->paginate(15)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
        $this->validate($request, [
            'label' => 'required',
            "message" => 'required',
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
            $path = $request->file('photo')->storeAs('public/news/', $fileNameToStore);
        } else {
            $fileNameToStore = $news->image;
        }

        $request->request->add(['image' => $fileNameToStore]);

        $news->update($request->all());

        return redirect()->back()->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect('news')->with('success', 'Successfully deleted');
    }
}
