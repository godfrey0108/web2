<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function read()
    {
        return '';
    }

    public function ajax(Request $request)
    {
        $name = $request->input('name'); // Ubah dari $request->name menjadi $request->input('name')
        $results = DB::table('product')->where('name', 'like', '%' . $name . '%')->get(); // Perbaiki variabel $results

        $count = count($results); // Perbaiki variabel $c menjadi $count

        if ($count == 0) {
            return '<p class="text-muted bg-light">Maaf, Data Tidak Ditemukan</p>';
        } else {
            return view('ajaxpage')->with([
                'data' => $results // Perbaiki variabel $result menjadi $results
            ]);
        }
    }
}
