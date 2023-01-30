<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
{
    //
    public function create()
    {
        $bookdata = BookModel::paginate(5);
       
        return view('admin.book.index' , compact('bookdata'));
    }
    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $bookdata = BookModel::paginate(5);
      return view('admin.book.paginate', compact('bookdata'))->render();
     }
    }
}
