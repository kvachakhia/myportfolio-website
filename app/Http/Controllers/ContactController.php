<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = DB::table('contacts')->orderByDesc('created_at','desc')->get();
        
        return view('admin.dashboard.page.contact',[
            'contacts' => $contacts
        ]);
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
        request()->validate([
            'value' => 'max:2048',
        ]);

        $contact = new Contact;
        $contact->key_name = str_slug($request->input('key_name'));
        $contact->value = $request->input('value');
        if (request()->hasFile('value')) {
            $contact->value = '/images/' . $imageName;
        }
           
        $contact->save();

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
        $contacts = DB::table('contacts')->orderByDesc('created_at','desc')->get();
        $menus = DB::table('menus')->get();
        
        return view('pages.contact',[
            'menus' => $menus,
            'contacts' => $contacts,
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

        $contact = Contact::findorFail( $request->input('id') )->update(
            [ 
                'key_name' => str_slug ($request->input('key_name')),'value' => $request->input('value')
            ]
        );

        if( $contact ) {
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
        $contact  = Contact::findorFail( $id )->delete();

        return redirect()->back()->with('message', 'Key Deleted');
    }
}
