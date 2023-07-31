<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hoadonban;
use App\Models\chitiethoadonban;
use App\Models\khachhang;
use App\Models\sanpham;

class HoaDonBanController extends Controller
{
    //
    public function index()
    {
        $list = HoaDonBan::join('KhachHang','KhachHang.id','=','HoaDonBan.MaKhachHang')->select('HoaDonBan.*','KhachHang.HoVaTen')->where('HoaDonBan.TrangThai','=',0)->get();
        return view('admin.hoadonban.index', ['listhdb' => $list]);
    }
    public function donhangcho()
    {
        $list = HoaDonBan::join('KhachHang','KhachHang.id','=','HoaDonBan.MaKhachHang')->select('HoaDonBan.*','KhachHang.HoVaTen')->where('HoaDonBan.TrangThai','=',1)->get();
        return view('admin.hoadonban.index', ['listhdb' => $list]);
    }
    public function donhangdaban(){
        $list = HoaDonBan::join('KhachHang','KhachHang.id','=','HoaDonBan.MaKhachHang')->select('HoaDonBan.*','KhachHang.HoVaTen')->where('HoaDonBan.TrangThai','=',2)->get();
        return view('admin.hoadonban.index', ['listhdb' => $list]);
    }

    public function xacnhan($id){
        $hdb = HoaDonBan::find($id);
        HoaDonBan::where('id', $id)->update(
            [
                "MaKhachHang" => $hdb -> MaKhachHang,
                "NgayTao" => $hdb -> NgayTao,
                "DiaChiNhan" => $hdb -> DiaChiNhan,
                "TrangThai" => 1,
                "MoTa" => $hdb -> MoTa,
                "TongTien" => $hdb -> TongTien              
            ]
        );
        return redirect()->back()->with('success', 'Xác thực thành công!');;
    }
    public function xacnhandagiao($id){
        $hdb = HoaDonBan::find($id);
        HoaDonBan::where('id', $id)->update(
            [
                "MaKhachHang" => $hdb -> MaKhachHang,
                "NgayTao" => $hdb -> NgayTao,
                "DiaChiNhan" => $hdb -> DiaChiNhan,
                "TrangThai" => 2,
                "MoTa" => $hdb -> MoTa,
                "TongTien" => $hdb -> TongTien              
            ]
        );
        return redirect()->back()->with('success', 'Xác thực thành công!');;
    }

    public function detail($id){
        $hdb = HoaDonBan::find($id);

        $thongtinkhachhang = KhachHang::find($hdb->MaKhachHang);

        $laymasp = ChiTietHoaDonBan::where('MaHoaDon','=',$id)->get();


        $danhsachsanpham = [];
        foreach ($laymasp as $value) {
            $sp = sanpham::join('ChiTietHoaDonBan', 'opdienthoai.id', '=', 'ChiTietHoaDonBan.MaOp')->where('chitiethoadonban.MaOp','=',$value['MaOp'])->where('chitiethoadonban.MaHoaDon','=',$value['MaHoaDon'])->get();
            $danhsachsanpham[] = $sp;
        }
       

        return view('admin.hoadonban.detail',compact('thongtinkhachhang','danhsachsanpham','hdb'));
    }
}
