<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = DB::table('portfolios')->orderByDesc('created_at', 'desc')
            ->get();

        return view('admin.dashboard.page.portfolio.index', ['portfolios' => $portfolios]);
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
        request()->validate(['image' => 'max:2048', ]);

        if (request()
            ->hasFile('image'))
        {
            $filename = time() . '.' . request()
                ->image
                ->getClientOriginalExtension();
            request()
                ->image
                ->move(public_path('images') , $filename);
        }

        $porftolio = new Portfolio;
        $porftolio->title = $request->input('title');
        $porftolio->slug = str_slug($request->input('slug'));
        $porftolio->description = $request->input('description');
        $porftolio->project_url = $request->input('project_url');

        if (request()
            ->hasFile('image'))
        {
            $porftolio->image = '/images/' . $filename;
        }
        $porftolio->save();

        return redirect('/dashboard/page/portfolio/')
            ->with('message', 'Portfolio Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $portfolios = Portfolio::where('slug', $slug)->first();

        $menus = DB::table('menus')->get();
        return view('pages.single', ['portfolio' => $portfolios, 'menus' => $menus]);
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
        $this->validate($request, ['id' => 'integer', 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 'title' => 'string', 'slug' => 'string', 'description' => 'string', 'project_url' => 'string', ]);

        if (request()->hasFile('image'))
        {
            $imageName = time() . '.' . request()
                ->image
                ->getClientOriginalExtension();
            request()
                ->image
                ->move(public_path('images') , $imageName);
        }

        if (request()->hasFile('image'))
        {
            $portfolio = Portfolio::findorFail($request->input('id'))
                ->update(['title' => $request->input('title') , 'description' => $request->input('description') , 'slug' => str_slug($request->input('slug')) , 'project_url' => $request->input('project_url') , 'image' => '/images/' . $imageName, ]);
        }
        else
        {
            $portfolio = Portfolio::findorFail($request->input('id'))
                ->update(['title' => $request->input('title') , 'slug' => str_slug($request->input('slug')) , 'description' => $request->input('description') , 'project_url' => $request->input('project_url') , ]);
        }

        if ($portfolio)
        {
            return redirect('/dashboard/page/portfolio/')->with('message', 'Project Updated');
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
        $portfolio = Portfolio::findorFail($id)->delete();
        return back();
    }

    public function addnewportfolio()
    {
        return view('admin.dashboard.page.portfolio.addnew');
    }

    public function editportfolio($id)
    {

        $portfolios = Portfolio::find($id);

        return view('admin.dashboard.page.portfolio.editportfolio', ['portfolios' => $portfolios]);
    }

    public function projects()
    {
        $portfolios = DB::table('portfolios')->orderByDesc('created_at', 'desc')
            ->get();

        $menus = DB::table('menus')->get();

        return view('pages.projects', ['portfolios' => $portfolios, 'menus' => $menus]);
    }
}

