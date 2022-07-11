<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view("pages.home");
    }

    public function contactPage()
    {
        return view("pages.contact");
    }

    public function aboutPage()
    {
        return view("pages.about");
    }

    public function galleryPage()
    {
        return view("pages.gallery");
    }

    public function productsPage()
    {
        return view("pages.products");
    }

    public function singleProduct()
    {
        return view("pages.single-product");
    }

    public function blog(){

        return view('pages.blog', [
            'articles'   =>  Article::latest()->paginate(10)
        ]);
    }

    public function showArticle($slug){

        $article = Article::where("slug", $slug)->firstOrFail();
        return view('pages.single', [
            'article' => $article,
        ]);
    }

}
