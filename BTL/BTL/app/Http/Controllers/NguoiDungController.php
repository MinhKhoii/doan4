<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\nguoidung;

class NguoiDungController extends Controller
{
    //
    public function index(){
        $data=User::all();
        return view('admin.nguoidung.index',['data'=>$data]);
    }

    public function create(){
        return view('admin.nguoidung.create');
    }

    public function store(Request $request){
        User::create($request->all());
        return redirect()->route('/admin/nguoidung/index');
    }

    public function show(string $id)
    {
        // $db =loaisp::findOrFail($id); // lấy dữ liệu theo id
        $data = User::where('id', $id)->first();
        return view('admin.nguoidung.read', ['db'=>$data]); // trả về view và truyền biến $data vào
    }


    public function edit(string $id=''){
        // $db=loaisp::find($id);
        $data = User::where('id', $id)->first();
        return view('admin.nguoidung.update',['db'=>$data]);
    }

    public function update(Request $request, string $id)
    {
        User::where('id', $id)->update([
                "name" => $request -> HoTen,
                "Address" => $request -> DiaChi,
                "Anh" => $request -> Anh,
                "Phone" => $request -> DienThoai,
                "email" => $request -> Email,
               
                "password" => $request->PassWord,
      
                "TrangThai"=>intval($request->TrangThai)  
            
            ]);

        return redirect()->route('/admin/nguoidung/index');
    }

    public function destroy(string $id){
        // loaisp::find($id)->delete();
        User::where('id', $id)->delete();
        return redirect()->route('/admin/nguoidung/index');
    }

    public function viewlogin(){
        return view('admin.login.index');
    }

    public function login(Request $request ){


        $this -> validate($request,[
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->route('/admin/sanpham/index');
        } else {
            // Đăng nhập thất bại
            return back()->withErrors([
                'email' => 'Email hoặc mật khẩu không chính xác.'             
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('nguoidung.viewlogin');
    }
}
