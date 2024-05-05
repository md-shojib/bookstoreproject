<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class usercontroller extends Controller
{
    function show(){
        $data = book::all();
        return view('main',['books'=>$data]);
    }
    function addData(Request $req){
        $books = new book();
        $books->isbn=$req->isbn;
        $books->title=$req->title;
        $books->author=$req->author;
        $books->stock=$req->stock;
        $books->price=$req->price;
        $books->save();
        return redirect('main');
    }
    function delete($id){
        $data = book::find($id);
        $data->delete();
        return redirect('main');
    }
    function showdata($id){
        $data = book::find($id);
        return view('update',['book'=>$data]);
    }
    function update(Request $req){
        $data = book::find($req->id);
        $data->isbn=$req->isbn;
        $data->title=$req->title;
        $data->author=$req->author;
        $data->stock=$req->stock;
        $data->price=$req->price;
        $data->save();
        return redirect('main');
    }
}
