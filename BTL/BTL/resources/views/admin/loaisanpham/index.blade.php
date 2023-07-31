@extends('admin.layout')
@section('content')

<section>
    <div class="card">
        <div class="card-header">
          <h1 class="card-title">Thông tin loại sản phẩm</h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <a href="{{route('create')}}" ><button class='btn btn-warning'> Thêm mới</button></a>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Mã loại</th>
                <th>Tên loại sản phẩm</th>
                <th>Mô tả</th>   
                <th>Chức năng</th>              
            </tr>
            </thead>
            <tbody>
                @foreach($data as $data )
            <tr>
               
                <td>{{ $data ->  id}}</td>
                <td>{{ $data ->  TenLOp}}</td>
                <td>{{ $data ->  MoTa}}</td>
                    
                <td><a href="{{route('edit',$data->id)}}" class='btn btn-primary'> Sửa</a> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('delete',$data->id)}}" class='btn btn-danger '>Xóa</a></td>           
                            
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
