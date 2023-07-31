<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\loaisp;
use Illuminate\Support\Facades\Validator;

class SanPhamController extends Controller
{
    //
    public function index(){
        $data=sanpham::all();
        
        return view('admin.sanpham.index',['data'=>$data]);
    }

    public function create(){
        $loaisp = LoaiSp::pluck('TenLOp','id');
        return view('admin.sanpham.create',['loaisp'=>$loaisp]);
    }

    public function store(Request $request){
        sanpham::create($request->all());
        return redirect()->route('/admin/sanpham/index');
    }

    public function show(string $id)
    {
        // $db =sanpham::findOrFail($id); // lấy dữ liệu theo id
        $data = sanpham::where('id', $id)->first();
        return view('admin.sanpham.read', ['db'=>$data]); // trả về view và truyền biến $data vào
    }

    public function edit(string $id=''){
        // $db=sanpham::find($id);
        $data = sanpham::where('id', $id)->first();
        return view('admin.sanpham.update',['db'=>$data]);
    }

    public function update(Request $request, string $id)
    {
        sanpham::where('id', $id)->update([
            'TenOp' => $request->input('TenOp'),
            'Anh' => $request->input('Anh'),
            'Giaban' => $request->input('Giaban'),
            'Soluong' => $request->input('Soluong'),
            'MoTa' => $request->input('MoTa'),
            'MaLOp' => $request->input('MaLOp'),
        ]);

        return redirect()->route('/admin/sanpham/index');
    }

    public function destroy(string $id){
        // sanpham::find($id)->delete();
        sanpham::where('id', $id)->delete();
        return redirect()->route('/admin/sanpham/index');
    }

    public function SPList()
    {
        $SanPham = sanpham::all();

        return view('home', compact('SanPham'));
    }
}

