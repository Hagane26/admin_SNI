<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;


class turnitin extends Controller
{
    public function index(){
        $tp = DB::table("turnitin_products")->get();
        return view("turnitin.index",['data'=>$tp]);
    }

    public function order(Request $req){
        $tp = DB::table("turnitin_products")->where("id",$req->product)->first();
        return view("turnitin.order",["data"=>$tp]);
    }

    public function order_action(Request $req){
         $file = $req->file('file');

    if ($file) {
        // Mengambil konten file
        $contents = file_get_contents($file->getRealPath());

        // Menyimpan file ke disk 'turnitin_files' di dalam folder 'uploads'
        // Anda harus menentukan nama file
        $fileName = time() . '_' . $file->getClientOriginalName(); // Contoh nama unik
        Storage::disk('turnitin_files')->put('uploads/' . $fileName, $contents);

        return "File berhasil diunggah secara langsung: " . 'uploads/' . $fileName;
    }

    return "Tidak ada file yang diunggah.";;
    }
}
