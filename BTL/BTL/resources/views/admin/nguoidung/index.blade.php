@extends('admin.layout')
@section('content')

<section>
    <div class="card">
        <div class="card-header">
          <h1 class="card-title">Thông tin người dùng</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <a href="{{route('/admin/nguoidung/create')}}" ><button class='btn btn-warning'> Thêm mới</button></a>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Tên</th>
                <th>PassWord</th>
                <th>Address</th>         
                <th>Anh</th>                 
                <th>DienThoai</th>   
                <th>Email</th>
                <th>TrangThai</th>                                            
            </tr>
            </thead>
            <tbody>
                @foreach($data as $data )
            <tr>
              

                <td>{{ $data ->  id}}</td>
                <td>{{ $data ->  name}}</td>
                <td>{{ $data ->  password}}</td>
                <td>{{ $data ->  Address}}</td>
                <td>{{ $data ->  Anh}}</td>
                <td>{{ $data ->  Phone}}</td>
                <td>{{ $data ->  email}}</td>
                
                <td>@if($data->TrangThai)
                  <p style="color: green">Hoạt động</p>
                  @else
                  <p style="color: red">Không hoạt động</p>
                  @endif
              </td>

              <td> <a href="{{route('/admin/nguoidung/edit',$data->id)}}" class='btn btn-primary'> Sửa </a> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('/admin/nguoidung/delete',$data->id)}}" class='btn btn-danger '>Xóa</a></td>
                    
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
