<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Helpers;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $about = DB::table('abouts')->orderByDesc('created_at','desc')->get();
        
        return view('admin.dashboard.page.about',[
            'abouts' => $about
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
        request()->validate([
            'value' => 'max:2048',
        ]);

        if (request()->hasFile('value')) {
            $imageName = time().'.'.request()->value->getClientOriginalExtension();
            request()->value->move(public_path('images'), $imageName) ;
        }

        $about = new About;
        $about->key_name = str_slug($request->input('key_name'));
        $about->value = $request->input('value');
        if (request()->hasFile('value')) {
            $about->value = '/images/' . $imageName;
        }
           
        $about->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $hero = DB::table('heroes')->get();
        $menus = DB::table('menus')->get();

        return view('pages.about',[
            'hero' => $hero,
            'menus' => $menus,
        ]);
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
        $this->validate($request,[
            'key_name' =>   'string',
            'value'      =>   'string',
            'id'       =>   'integer'
        ]);

        $about = About::findorFail( $request->input('id') )->update(
            [ 
                'key_name' => str_slug ($request->input('key_name')),'value' => $request->input('value')
            ]
        );

        if( $about ) {
            return redirect()->back()->with('message', 'Key Updated');
        }

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findorFail( $id )->delete();

        return back();
    }
}
