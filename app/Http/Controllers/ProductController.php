<?php

namespace App\Http\Controllers;

use App\Product;
use App\Fileentry;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index(){
        $products = Product::all();
        return view('products',compact('products'));
    }

    public function destroy($id){
        Product::destroy($id);
        return redirect('/products');
    }

    public function newProduct(){
        return view('/new');
    }

    public function addFile() {

        $file = Request::file('file');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));

        $entry = new Fileentry();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;

        $entry->save();

        $product  = new Product();

        $product->file_id=$entry->id;
        $product->name =Request::input('name');
        $product->description =Request::input('description');
        $product->price =Request::input('price');
        $product->imageurl =Request::input('imageurl');

        $product->save();

        return redirect('/products');

    }
    
}