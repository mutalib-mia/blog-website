<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{


    public function addAuthor(){
        return view('admin.author.add-author');
    }
    public function saveAuthor(Request $request){

//        return $request ;

        $product = new Author();

        $product->author_name = $request->author_name;

        $product->description = $request->description;

        $product->image = $this->saveImage($request);
        $product->save();
        return back();
    }

    private function saveImage($request){
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalName();
        $directory = 'adminAssets/upload/image/';
        $imgUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }


    public function manageAuthor(){
        return view('admin.author.manage-author',[
            'products' => Author::all()
        ]);
    }

    public function editAuthor( $id){
        return view('admin.author.edit-author',[
            'products' => Author::find($id)
        ]);
    }

    public function updateAuthor(Request $request){
        $product = Author::find($request->product_id);

        $product->product_name = $request->product_name;
        $product->category_name = $request->category_name;
        $product->brand_name = $request->brand_name;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
//        $product->product_status = $request->product_status;

        if ($request->file('image')){
            unlink($product->image);
            $product->image = $this->saveImage($request);
        }

        $product->save();
        return redirect('/manage-author');
    }

    public function deleteAuthor(Request $request){
        $product = Author::find($request->product_id);

        unlink($product->image);
        $product->delete();


        return back();
    }


    public function status($id){
        $product = Author::find($id);
        if ($product->status==1){
            $product->status = 0;
            $product->save();
            return back();
        }else{
            $product->status=1;
            $product->save();
            return back();
        }
    }
}
