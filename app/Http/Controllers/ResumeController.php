<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers;
use App\Resume;
class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resume = DB::table('resumes')->orderByDesc('created_at','desc')->get();
        
        return view('admin.dashboard.page.resume',[
            'resumes' => $resume
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
            $filename = time().'.'.request()->value->getClientOriginalExtension();
            request()->value->move(public_path('file'), $filename) ;
        }

        $resume = new Resume;
        $resume->key_name = str_slug($request->input('key_name'));
        $resume->value = $request->input('value');
        if (request()->hasFile('value')) {
            $resume->value = '/file/' . $filename;
        }
           
        $resume->save();

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

        $resume = Resume::findorFail( $request->input('id') )->update(
            [ 
                'key_name' => str_slug ($request->input('key_name')),'value' => $request->input('value')
            ]
        );

        if( $resume ) {
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
        $resume = Resume::findorFail( $id )->delete();

        return back();
    }
}
