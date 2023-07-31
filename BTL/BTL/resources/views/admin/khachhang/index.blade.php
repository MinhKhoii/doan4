@extends('admin.layout')
@section('content')

<section>
    <div class="card">
        <div class="card-header">
          <h1 class="card-title">Thông tin người dùng</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <a href="{{route('/admin/khachhang/create')}}" ><button class='btn btn-warning'> Thêm mới</button></a>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Mã loại</th>
                <th>UserName</th>
                <th>PassWord</th>       
                <th>Họ và tên</th>   
                <th>Địa chỉ</th>                 
                <th>Số điện thoại</th>   
                <th>Email</th>       
                <th>Chức năng</th>                                  
            </tr>
            </thead>
            <tbody>
                @foreach($data as $data )
            <tr>
               
                <td>{{ $data ->  id}}</td>
                <td>{{ $data ->  UserName}}</td>
                <td>{{ $data ->  PassWord}}</td>
                <td>{{ $data ->  HoVaTen}}</td>
                <td>{{ $data ->  DiaChi}}</td>
                <td>{{ $data ->  SoDienThoai}}</td>
                <td>{{ $data ->  Email}}</td>
                
                
                <td> <a href="{{route('/admin/khachhang/edit',$data->id)}}" class='btn btn-primary'> Sửa </a> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('/admin/khachhang/delete',$data->id)}}" class='btn btn-danger '>Xóa</a></td>
             
                            
            </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    
  </section>

  <!-- Main content -->
  <section class="content">

  </section>
  <!-- /.content -->
</section>
@endsection
