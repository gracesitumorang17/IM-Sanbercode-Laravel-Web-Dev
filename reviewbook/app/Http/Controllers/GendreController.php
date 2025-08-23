<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GendreController extends Controller
{
    public function create()
    {
        return view("gendre.tambah");
    }
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|min:5',
        'description' => 'required',
    ]);

    $now = Carbon::now();
        DB::table('gendres')->insert([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'created_at'=> $now,
        'updated_at'=> $now,
    ]);

    return redirect('/gendre');
    }

    public function index()
    {
        $gendres = DB::table('gendres')->get();

        // dd($gendres);
 
        return view('gendre.tampil', ['gendres' => $gendres]);
    }

    public function show($id)
    {
       $gendre = DB::table('gendres')->find($id);

       return view('gendre.detail', ['gendre' => $gendre]);
    }

    public function edit($id)
    {
        $gendre = DB::table('gendres')->find($id);
        return view('gendre.edit', ['gendre' => $gendre]);
    }

    public function update($id, Request $request)
    {
         $request->validate([
        'name' => 'required|min:5',
        'description' => 'required',
    ]);

    $now = Carbon::now();

    DB::table('gendres')
    ->where('id', $id)
    ->update(
        [
        'name' => $request->input("name"),
        'description' => $request->input("description"),
        ]
        );

        return redirect('/gendre');
    }

    public function destroy($id)
    {
         DB::table('gendres')->where('id', $id)->delete();
         return redirect('/gendre');
    
    }
}
