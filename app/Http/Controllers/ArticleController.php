<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        return view('articles.index', [
            'articles'   =>  Article::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $attributes = $request->validate([
            'body' => 'required',
            'title' => 'required | max:255',
            'slug'  => 'required | max:255 | unique:articles,slug',
            'description'  => 'required',
            'thumbnail'  => 'required | image',
        ]);
        $image = $request->file('thumbnail');
        $var = date_create();
        $time = date_format($var, 'YmdHis');
        $imageName = $time . '-' . $image->getClientOriginalName();
        $image->move(public_path() . '/uploads/articles/', $imageName);
        $article = Article::create([
            "body" => $request->body,
            "title" => $request->title,
            "slug" => $request->slug,
            "thumbnail" => $imageName,
            "description" => $request->description,

        ]);
        return back()->with('success', 'Article Creér avec Succés');

    }


    public function show($slug){}


    public function edit($id)
    {
        return view("articles.edit", [
            "article" => Article::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributes = $request->validate([
            'body' => 'required',
            'title' => 'required | max:255',
            'slug'  => 'required | max:255',
            'description'  => 'required',
        ]);
        $article = Article::find($id);
        if ($request->hasFile('thumbnail')) :
            $image = $request->file('thumbnail');
            $var = date_create();
            $time = date_format($var, 'YmdHis');
            $imageName = $time . '-' . $image->getClientOriginalName();
            $image->move(public_path() . '/uploads/articles/', $imageName);
            $article->thumbnail = $imageName;
        endif;


        $article->body = $request->body;
        $article->title = $request->title;
        $article->slug = $request->slug;
        $article->description = $request->description;

        $article->update();

        return redirect("/admin/blog")->with('success', 'Article Modifié avec succés');

    }

    public function destroy($id)
    {
        $article = Article::where("id", $id)->firstOrFail();
        $article->delete();
        return redirect("/admin/blog")->with('success', 'Article Supprimée avec succés');
    }
}
