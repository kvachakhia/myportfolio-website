<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hero;
class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $hero = DB::table('heroes')->get();

        return view('admin.dashboard.page.homepage',[
            'hero' => $hero
        ]);
    }

    public function home()
    {   
        $hero = DB::table('heroes')->get();

        return view('pages.homepage',[
            'hero' => $hero
        ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        view('homepage');
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

    public function imageUploadPost(Request $request)
    {
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $imageName) ;

        $hero = new Hero;

        $hero->name = $request->input('name');
        $hero->profession = $request->input('profession');

        $hero->image = '/images/' . $imageName;

        $hero->save();

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }


    public function imageUploadUpdate(Request $request)
    {
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $imageName) ;


      
        $menu = Hero::findorFail(

        $request->input('id') )->update(
            [
                'name'          =>$request->input('name'),
                'profession'    => $request->input('profession'),
                'image'         => '/images/' . $imageName
            ]);


        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }
}
