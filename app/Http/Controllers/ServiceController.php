<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = DB::table('services')->orderByDesc('created_at', 'desc')
            ->get();

        return view('admin.dashboard.page.service.index', ['services' => $services]);
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
        request()->validate(['icon' => 'max:2048', ]);

        if (request()
            ->hasFile('icon'))
        {
            $filename = time() . '.' . request()
                ->icon
                ->getClientOriginalExtension();
            request()
                ->icon
                ->move(public_path('images') , $filename);
        }

        $service = new Service;
        $service->title = $request->input('title');
        $service->description = $request->input('description');

        if (request()
            ->hasFile('icon'))
        {
            $service->icon = '/images/' . $filename;
        }
        $service->save();

        return redirect('/dashboard/page/services/')
            ->with('message', 'Service Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $services = DB::table('services')->orderByDesc('created_at', 'desc')
            ->get();
        $menus = DB::table('menus')->get();

        return view('pages.services', ['services' => $services, 'menus' => $menus]);
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
        $this->validate($request, ['id' => 'integer', 'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 'title' => 'string', 'description' => 'string']);

        if (request()->hasFile('icon'))
        {
            $imageName = time() . '.' . request()
                ->icon
                ->getClientOriginalExtension();
            request()
                ->icon
                ->move(public_path('images') , $imageName);
        }

        if (request()->hasFile('icon'))
        {
            $service = Service::findorFail($request->input('id'))
                ->update(['title' => $request->input('title') , 'description' => $request->input('description') , 'icon' => '/images/' . $imageName, ]);
        }
        else
        {
            $service = Service::findorFail($request->input('id'))
                ->update(['title' => $request->input('title') , 'description' => $request->input('description') , ]);
        }

        if ($service)
        {
            return redirect('/dashboard/page/services/')->with('message', 'Service Updated');
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
        $service = Service::findorFail($id)->delete();
        return back();
    }

    public function addnewservice()
    {
        return view('admin.dashboard.page.service.addnew');
    }

    public function editservice($id)
    {

        $service = Service::find($id);

        return view('admin.dashboard.page.service.editservice', ['service' => $service]);
    }

}

