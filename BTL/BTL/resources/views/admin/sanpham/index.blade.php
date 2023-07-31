@extends('admin.layout')
@section('content')

<section>
    <div class="card">
        <div class="card-header">
          <h1 class="card-title">Thông tin sản phẩm</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <a href="{{route('/admin/sanpham/create')}}" ><button class='btn btn-warning'> Thêm mới</button></a>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá bán</th>
                <th>Số lượng</th>
                <th>Mô tả</th>                 
                <th>Mã loại</th>
                <th>Chức năng</th>  
            </tr>
            </thead>
            <tbody>
                @foreach($data as $data )
            <tr>
               
                <td>{{ $data ->  id}}</td>  
                <td>{{ $data ->  TenOp}}</td>
                <td><img src="/asset/img/anh/{{ $data -> Anh }}" style="width:90px" alt=""></td>
                <td>{{  number_format($data->Giaban, 0, ',', '.')  }} ₫</td>
                <td>{{ $data -> Soluong }}</td>
                <td>{{ $data ->  MoTa}}</td>
                <td>{{ $data ->  MaLOp}}</td>

                
                <td> <a href="{{route('/admin/sanpham/edit',$data->id)}}" class='btn btn-primary'> Sửa </a> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('/admin/sanpham/delete',$data->id)}}" class='btn btn-danger '>Xóa</a></td>
                
                                  
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
