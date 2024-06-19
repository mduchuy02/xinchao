<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function f1()
    {
        return View('user.demo.f1', ['data' => Book::all()]);
    }
    function f2()
    {
        return View('user.demo.f2', ['data' => Book::paginate(15)]);
    }

    function f3()
    {
        return View('user.demo.f3', ['data' => Book::paginate(15)]);
    }
    function f4($slug)
    {
        echo $slug;
    }
    function f5($slug)
    {
        echo $slug;
    }

    function f21()
    {
        $dataCata = Category::all();
        foreach ($dataCata as $item) {
            echo "<br>" . $item->cat_id . "," . $item->cat_name;
            foreach ($item->book as $item2) {
                echo '<li>' . $item2->book_id . ", " . $item2->book_name . '</li>';
            }
            echo "</ol>";
        }
    }

    function f22(){
        $data = Book::all();
        foreach ($data as $item) {
            echo "<br>". $item->book_id."-". $item->book_name . " - " .$item->category->cat_name;
        }
    }

    // search book 

    function search(Request $r){
        $key = $r->key; echo $key;
        // $gia = $r->gia??10000;
        $gia = ($r->gia*1==0)?10000: $r->gia*1;
        // $data = Book::where('book_id','th01');// select * from book where book_id = 'th01'

        // $data = Book::where("book_name","like","%$key%")->get();
        // return view('user.demo.search');
       // selec * from book where book_name like '%$key%' and price < $gia order by price desc
       DB::enableQueryLog();
        $data = Book::where("book_name","like","%$key%")->where("price","<","$gia")
        ->orderBy('price','desc')
        ->get();
        $query = DB::getQueryLog();
        // dd($query);
        // dd($data);

        return view('user.demo.search',['data'=>$data, 'key'=>$key,'gia'=>$gia]);
    }


    function pub(){
        return view('user.demo.pub',['data'=>Publisher::all()]);
    }
    function storePub(Request $r){

        //Cach 1
        // dd($r->all());
        // $o = new Publisher();
        // $o->pub_id = $r->pub_id;
        // $o->pub_name = $r->pub_name;
        // return redirect('/pub');

        //Cach 2
        Publisher::create($r->all());
        return redirect('/pub');
    
    }
}