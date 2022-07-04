<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function index()
    {
        $category = Category::where('status','0')->get();
        $featured_articles = Article::where('trending','1')->take(15)->get();
        $featured_articles=article::paginate(6);
        return view('frontend.index', compact('featured_articles','category'));
    }

    public function category()
    {
        $category = Category::where('status','0')->get();
        return view('frontend.category', compact('category'));
    }

    public function viewcategory($slug)
    {
            if(Category::where('slug', $slug)->exists())
            {
                $category = Category::where('slug', $slug)->first();
                $articles  = Article::where('cate_id', $category->id)->where('status','0')->get();
                return view('frontend.articles.index', compact('category','articles'));
            }

            else{
                return redirect('/')->with('status', "slug doesn't exists");
            }
    }

    public function articleview($cate_slug, $art_slug){
        if(Category::where('slug', $cate_slug)->exists())
        {
            if(Article::where('slug', $art_slug)->exists()){
                $articles  = Article::where('slug', $art_slug)->first();
                return view('frontend.articles.view', compact('articles'));
            }else{
                return redirect('/')->with('status', "the link was broken");
            }
        }else{
            return redirect('/')->with('status', "no such category found");
        }
    }

}
