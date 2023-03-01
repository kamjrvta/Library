<?php

namespace App\Http\Controllers;
use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function index()
    {
        $data = Reader::all();
        return view('reader.index',['readers'=>$data]);
    }
}
