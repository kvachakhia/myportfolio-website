<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('blogs')->orderByDesc('created_at', 'desc')
            ->get();

        return view('admin.dashboard.page.blog.index', ['blogs' => $blogs]);
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

        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->slug = str_slug($request->input('slug'));
        $blog->description = $request->input('description');
        $blog->seo_description = $request->input('seo_description');

        if (request()
            ->hasFile('image'))
        {
            $blog->image = '/images/' . $filename;
        }
        $blog->save();

        return redirect('/dashboard/page/blogs/')
            ->with('message', 'Blog Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blogs = Blog::where('slug', $slug)->first();

        $menus = DB::table('menus')->get();
        return view('pages.single-blog', ['blog' => $blogs, 'menus' => $menus]);
        
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
        $this->validate($request, ['id' => 'integer', 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 'title' => 'string', 'slug' => 'string', 'description' => 'string', 'seo_description' => 'string', ]);

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
            $blog = Blog::findorFail($request->input('id'))
                ->update(['title' => $request->input('title') , 'description' => $request->input('description') , 'slug' => str_slug($request->input('slug')) , 'seo_description' => $request->input('seo_description') , 'image' => '/images/' . $imageName, ]);
        }
        else
        {
            $blog = Blog::findorFail($request->input('id'))
                ->update(['title' => $request->input('title') , 'slug' => str_slug($request->input('slug')) , 'description' => $request->input('description') , 'seo_description' => $request->input('seo_description') , ]);
        }

        if ($blog)
        {
            return redirect('/dashboard/page/blogs/')->with('message', 'Blog Updated');
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
        $blogs = Blog::findorFail($id)->delete();
        return back();
    }

    public function addnewblog()
    {
        return view('admin.dashboard.page.blog.addnew');
    }

    public function editblog($id)
    {

        $blogs = Blog::find($id);

        return view('admin.dashboard.page.blog.editblog', ['blogs' => $blogs]);
    }

    public function blogs()
    {
        $blogs = DB::table('blogs')->orderByDesc('created_at', 'desc')
            ->get();

        $menus = DB::table('menus')->get();

        return view('pages.blogs', ['blogs' => $blogs, 'menus' => $menus]);
    }

}

