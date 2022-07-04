<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

    public function add()
    {
        $category = Category::all();
        return view('admin.article.add',compact('category'));
    }

    public function insert(Request $request)
    {
        $articles = new Article();
        if($request->hasfile('image'))
        {

         $file = $request->file('image');
         $ext = $file ->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('assets/uploads/articles/',$filename);
         $articles->image = $filename;

        }

        $articles->cate_id = $request->input('cate_id');
        $articles->name = $request->input('name');
        $articles->slug = $request->input('slug');
        $articles->description = $request->input('description');
        $articles->original_price = $request->input('original_price');
        $articles->status = $request->input('status') == TRUE ? '1' : '0';
        $articles->trending = $request->input('trending') == TRUE ? '1' : '0';
        $articles->save();
        return redirect('articles')->with('status',"article Added Successfully");
    }



    public function edit($id)
    {
        $articles = article::find($id);
        return view('admin.article.edit', compact('articles'));
    }


    public function update(Request $request, $id){

        $articles = article::find($id);
        if($request->hasfile('image'))
        {

            $path = 'assets/uploads/articles/'.$articles->image;
            if(File::exists($path))
            {
               File::delete($path);
            }

         $file = $request->file('image');
         $ext = $file ->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('assets/uploads/articles/',$filename);
         $articles->image = $filename;

        }
        $articles->name = $request->input('name');
        $articles->slug = $request->input('slug');
        $articles->description = $request->input('description');
        $articles->original_price = $request->input('original_price');
        $articles->status = $request->input('status') == TRUE ? '1' : '0';
        $articles->trending = $request->input('trending') == TRUE ? '1' : '0';
        $articles->update();
        return redirect('articles')->with('status', "article update Succes");
    }

    public function destroy($id)
    {
        $articles = article::find($id);
        $path = 'assets/uploads/articles/'.$articles->image;
            if(File::exists($path))
            {
               File::delete($path);
            }
            $articles->delete();
            return redirect('articles')->with('status',"article deleted Successfully");
    }
}
