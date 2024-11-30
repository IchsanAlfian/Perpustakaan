<?php

namespace App\Http\Controllers;

use App\Models\Dashboard ;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    function tampil(){
        $dashboard =Dashboard::get();
        // dd($dashboard);
        return view('dashboard.tampil', compact('dashboard'));
    }

    function tambah(){
        return view('dashboard.tambah');
    }
    function submit(Request $request){
        $dashboard = new Dashboard();
        $dashboard->nama = $request->nama;
        $dashboard->email = $request->email;
        $dashboard->status= $request->status;
        $dashboard->password =bcrypt($request->password);
        
        $dashboard->save();

        return redirect()->route('dashboard.tampil');
       
    }
    function edit($id){
        $dashboard = dashboard::find($id);
        return view('dashboard.edit', compact('dashboard'));

    }
    function update(Request $request, $id){
        $dashboard = dashboard::find($id);
        $dashboard->nama = $request->nama;
        $dashboard->email = $request->email;
        $dashboard->password = $request->password;
        $dashboard->status = $request->status;
        $dashboard->update();

        return redirect()->route('dashboard.tampil');
    }
    function delete($id){
        $dashboard = dashboard::find($id);
        $dashboard->delete();
        return redirect()->route('dashboard.tampil');
    }
}
