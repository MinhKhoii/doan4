<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\loaisp;
use App\Models\khachhang;
use App\Models\hoadonban;
use App\Models\chitiethoadonban;
use Carbon\Carbon;
use DataTime;
use Symfony\Component\Console\Helper\Table;

class HomeController extends Controller
{
    //
    public function index(){
        $loaisp = loaisp::all();
        $sp = DB::table('opdienthoai')->take(8)->get();   
        $sp1 = DB::table('opdienthoai')->take(3)->get(); 
        $spchay = sanpham::orderBy('id','desc')->take(3)->get();
        $spbanchay = sanpham::join('chitiethoadonban', 'chitiethoadonban.MaOp', '=', 'opdienthoai.id')
        ->select('opdienthoai.*', ChiTietHoaDonBan::raw('SUM(chitiethoadonban.soluong) as total_quantity'))
        ->groupBy('opdienthoai.id','opdienthoai.TenOp','opdienthoai.giaban','opdienthoai.SoLuong','opdienthoai.MaLOp','opdienthoai.Anh','opdienthoai.MoTa','opdienthoai.created_at','opdienthoai.updated_at')
        ->orderBy('total_quantity', 'desc')
        ->take(3)
        ->get();
        
        return view('index', compact('sp', 'loaisp','sp1','spbanchay' ,'spchay',));
        
    }

    public function addbill(Request $request,$id){
        // $ngaytao = DateTime();

        $sum = 0;
        $cart = \Cart::getContent();
        $khachhang = session()->get('khachhang');

        $diachinhan = $request->DiaChiNhan;
        $now = Carbon::now();

        foreach ($cart as $x) {
            $sum += $x['quantity'] * $x['price'];
        } 
        HoaDonBan::create([
            'MaKhachHang'=>$id,
            'DiaChiNhan' => $diachinhan,
            'NgayTao' => $now,
            'TrangThai' => 0,
            'MoTa' => '',
            'TongTien' => $sum
        ]);

        $lastproduct = HoaDonBan::latest()->first();

        foreach ($cart as $x) {
            ChiTietHoaDonBan::create(
                [
                    'MaOp'=>$x['id'],
                    'MaHoaDon'=>$lastproduct->id,
                    'SoLuong'=>$x['quantity'],
                    'TamTinh'=>$x['price']*$x['quantity']
                ]
                );
        }
        
        \cart::clear();

        return redirect()->route('home');
    }

    public function checkout(){
        $listkh = session()->get('khachhang',[]);
        if(count($listkh)<1){
            return redirect()->route('loginuser');
        }
        $carts = \Cart::getContent();
        return view('checkout',compact('carts'),compact('listkh'));
    }
    public function checklogin(Request $request)
    {       
        $tk = $request -> username;
        $mk = $request -> password;
        $check= khachhang::where('UserName','=',$tk)->where('PassWord','=',$mk)->get();
        
        if(count($check)>0){     
            $cus = session()->get('khachhang',[]);
                $cus = [
                    'id'=>$check[0]->id,'UserName'=>$check[0]->UserName,
                    'PassWord'=>$check[0]->PassWord,'HoVaTen'=>$check[0]->HoVaTen,
                    'DiaChi'=>$check[0]->DiaChi,'SoDienThoai'=>$check[0]->SoDienThoai,
                    'Email'=>$check[0]->Email
                ];
            session()->put('khachhang', $cus);
            return redirect()->route('home');              
        }
        else{
            return redirect('login')
                    ->withErrors(['login' => 'Tên đăng nhập hoặc mật khẩu không chính xác'])
                    ->withInput();
        }
    }

    public function longout(){
        session()->forget('khachhang');
        return redirect()->route('home');
        // return redirect()->route('loginuser');
    }
    public function login(){
        return view('login');
    }
    public function blog(){
        return view('blog');
    }
    public function shopgrid($id){
        $loaisp = loaisp::all(); 
        $sp = sanpham::where('MaLOp',$id)->get();
        $sp1 = DB::table('opdienthoai')->take(3)->get();
        return view('shop-grid', [ 'sanpham'=> $sp,'sp1'=> $sp1]);
    }
    public function shopcart(){
        $carts = session()->get('cart');
        return view('shop-cart',compact('carts'));
    }
    public function shopdetails($id){
        $lsp = loaisp::where('id',$id)->first();     
        $sp = sanpham::find($id);
        
        $sp1 = DB::table('opdienthoai')->take(4)->get();        
        return view('shop-details',['sp' => $sp, 'sp1'=> $sp1]);
    }
    public function blogdetails(){
        return view('blog-details');
    }

    public function register()
    {
        return view('register');
    }

    //Đăng ký tài khoản khách hàng
    public function dangky(Request $request){
        KhachHang::create([
            "HoVaTen" => $request->hovaten,
            "DiaChi" => $request->diachi,
            "SoDienThoai" => $request->sodienthoai,
            "Email" => $request->email,
            "UserName" => $request ->username,
            "PassWord" => $request -> password
        ]);
        return redirect()->route('loginuser')->with('success','Đăng ký tài khoản thành công');   
    }

}
