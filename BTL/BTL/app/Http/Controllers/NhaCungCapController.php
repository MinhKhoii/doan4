<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhacungcap;

class NhaCungCapController extends Controller
{
    //
    public function index(){
        $data=nhacungcap::all();
        return view('admin.nhacungcap.index',['data'=>$data]);
    }

    public function create(){
        return view('admin.nhacungcap.create');
    }

    public function store(Request $request){
        nhacungcap::create($request->all());
        return redirect()->route('/admin/nhacungcap/index');
    }

    public function show(string $id)
    {
        // $db =loaisp::findOrFail($id); // lấy dữ liệu theo id
        $data = nhacungcap::where('id', $id)->first();
        return view('admin.nhacungcap.read', ['db'=>$data]); // trả về view và truyền biến $data vào
    }


    public function edit(string $id=''){
        
        $data = nhacungcap::where('id', $id)->first();
        return view('admin.nhacungcap.update',['db'=>$data]);
    }

    public function update(Request $request, string $id)
    {
        nhacungcap::where('id', $id)->update([ 
            'HoTen' => $request->input('HoTen'),
            'DiaChi' => $request->input('DiaChi'),
            'DienThoai' => $request->input('DienThoai'),
            'Email' => $request->input('Email'),
                       
            ]);

        return redirect()->route('/admin/nhacungcap/index');
    }

    public function destroy(string $id){
        
        nhacungcap::where('id', $id)->delete();
        return redirect()->route('/admin/nhacungcap/index');
    }
}
