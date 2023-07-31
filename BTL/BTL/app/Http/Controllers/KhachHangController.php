<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\khachhang;

class KhachHangController extends Controller
{
    //
    public function index(){
        $data=khachhang::all();
        return view('admin.khachhang.index',['data'=>$data]);
    }

    public function create(){
        return view('admin.khachhang.create');
    }

    public function store(Request $request){
        khachhang::create($request->all());
        return redirect()->route('/admin/khachhang/index');
    }

    public function show(string $id)
    {
        // $db =loaisp::findOrFail($id); // lấy dữ liệu theo id
        $data = khachhang::where('id', $id)->first();
        return view('admin.khachhang.read', ['db'=>$data]); // trả về view và truyền biến $data vào
    }


    public function edit(string $id=''){
        // $db=loaisp::find($id);
        $data = khachhang::where('id', $id)->first();
        return view('admin.khachhang.update',['db'=>$data]);
    }

    public function update(Request $request, string $id)
    {
        khachhang::where('id', $id)->update([
            'UserName' => $request->input('UserName'), 
            'PassWord' => $request->input('PassWord'), 
            'HoVaTen' => $request->input('HoVaTen'),
            'SoDienThoai' => $request->input('SoDienThoai'),
            'Email' => $request->input('Email'),
            'DiaChi' => $request->input('DiaChi'),
            
            ]);

        return redirect()->route('/admin/khachhang/index');
    }

    public function destroy(string $id){
        // loaisp::find($id)->delete();
        khachhang::where('id', $id)->delete();
        return redirect()->route('/admin/khachhang/index');
    }
}
