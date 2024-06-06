<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\departemen;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoredepartemenRequest;
use App\Http\Requests\UpdatedepartemenRequest;

class DepartemenController extends Controller
{
    public function index()
    {
        $departemen = departemen::all();
        return view('dashboard.departemen', ['departemen' => $departemen]);
    }

    public function create()
    {
        return view('dashboard.departemen-add');
    }

    public function store(StoredepartemenRequest $request)
    {
        dd($request->all());
        $request->validate([
            'sektor' => 'required',
            'jabatan' => 'required',
            'name' => 'required',
            'jurusan' => 'required',
            'angkatan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        departemen::create($input);
     
        return redirect('/dashboard/departemen');
    }

    public function index_fr()
    {
        return view('frontend.departemen');
    }

    public function show(departemen $departemen)
    {
        //
    }

    public function edit(departemen $departemen )
    {
       //
    }

    public function ubah(departemen $departemen ,$id)
    {
        $departemen = departemen::findOrFail($id);
        return view('dashboard.departemen-edit', [
          'departemen' => $departemen]);
    }

    public function update(UpdatedepartemenRequest $request, departemen $departemen)
    {
       $request->validate([   
            'sektor' => 'required',
            'jabatan' => 'required',
            'name' => 'required',
            'jurusan' => 'required',
            'angkatan' => 'required'
        ]);
        $input = $request->all();
         if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
             $departemen->update($input);
             return redirect()->route('departemen.index');
    }

    public function destroy(departemen $departemen, $id)
    {
        DB::table('departemen')->where('id', $id)->delete();
        return redirect('/dashboard/departemen');
    }
}
