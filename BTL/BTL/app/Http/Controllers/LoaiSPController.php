<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\loaisp;

class LoaiSPController extends Controller
{
    //
    public function index(){
        $data=loaisp::all();
        return view('admin.loaisanpham.index',['data'=>$data]);
    }

    public function create(){
        return view('admin.loaisanpham.create');
    }

    public function store(Request $request){
        loaisp::create($request->all());
        return redirect()->route('index');
    }

    public function show(string $id)
    {
        // $db =loaisp::findOrFail($id); // lấy dữ liệu theo id
        $data = loaisp::where('id', $id)->first();
        return view('admin.loaisanpham.read', ['db'=>$data]); // trả về view và truyền biến $data vào
    }


    public function edit(string $id=''){
        // $db=loaisp::find($id);
        $data = loaisp::where('id', $id)->first();
        return view('admin.loaisanpham.update',['db'=>$data]);
    }

    public function update(Request $request, string $id)
    {
        loaisp::where('id', $id)->update([
            'TenLOp' => $request->input('TenLOp'),
            'MoTa' => $request->input('MoTa')
            ]);

        return redirect()->route('index');
    }

    public function destroy(string $id){
        // loaisp::find($id)->delete();
        loaisp::where('id', $id)->delete();
        return redirect()->route('index');
    }
}
