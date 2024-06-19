<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource. Danh sach Category
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Category::all()); // select * from category, print_r, var_dump
        $data = Category::all();
        //tao slug cho lan dau
        // foreach ($data as $item) {
        //     $o = Category::find($item->cat_id);
        //     $o->slug = Str::slug($item->cat_name);
        //     $o->save();
        // }
        return View('user.category.index', ['c' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //*crud create -> form de nhap lieu
    }

    /**
     * Store a newly created resource in storage.
     * Luu xuong database
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $o = new Category();
        $o->cat_id = $request->cat_id;
        $o->cat_name = $request->cat_name;
        // $o->slug = $request->cat_name; // tin học => tin-hoc
        $o->slug = Str::slug($request->cat_name);
        $o->save();
        return \redirect('/category');
    }


    /**
     * Display the specified resource. Hien thi chi tiet theo id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // lay 1 category co cat_id=$id = > truyen qua views    
        // select * from category where cat_id = $id
        // Category::find($id);// cach 1
        // dd(Category::findorfail($id));// cach 2: neu co loi not foud
        $data = Category::findorfail($id);
        return View('user.category.show', ['s' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "edit category cat_id = " . $id;
        //Lay du lieu co cat_id, truyen toi view edit chua form
        $data = Category::Findorfail($id);
        return View('user.category.edit', ['data' => $data]);
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
        // echo $id;
        // dd($request->all());
        $o = Category::findorfail($id);
        $o->cat_name = $request->cat_name; // thay doi object $o
        $o->save(); // luu xuong db
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $o = Category::FindorFail($id);
        $o->delete();
        return redirect('/category');
    }
}
