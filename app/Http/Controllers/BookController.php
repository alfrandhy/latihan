<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return "Ini Controller dari BookController";
    }
    public function viewJudul($judul)
    {
        return "Buku ini Berjudul : " .$judul;
    }
    public function judulBuku($judul) {
        $data = array(
            'judul'=>$judul
        );        
        return view('Book',$data);
    }  
}
