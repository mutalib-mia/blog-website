<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{


    public function addBlog(){
        return view('admin.blog.add-blog');
    }

    public function saveBlog(Request $request){

        $blog = new Blog();

        $blog->category_name = $request->category_name;
        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
//       $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->date = $request->date;
        $blog->image = $this->saveImage($request);
        $blog->save();

        return back();

    }

    private function saveImage($request){
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalName();
        $directory = 'adminAssets/upload/image/';
        $imageUrl = $directory.$imageName;
        $image -> move($directory,$imageName);
        return $imageUrl;

    }

}
