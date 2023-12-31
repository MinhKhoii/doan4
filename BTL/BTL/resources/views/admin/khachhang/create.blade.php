@extends('admin.layout')
@section('content')

<section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm khách hàng mới</h3>
              </div>
              <!-- form start -->
              <form id="quickForm" action="{{route('/admin/khachhang/store')}}" method="post">
                @csrf
                <div class="card-body">
                <div class="form-group">
                  <label for="UserName">UserName</label>
                  <input type="text" name="UserName" class="form-control" id="UserName" placeholder="UserName">
                </div>
                <div class="form-group">
                    <label for="PassWord">PassWord</label>
                    <input type="text" name="PassWord" class="form-control" id="PassWord" placeholder="PassWord">
                  </div>          
                <div class="form-group">
                  <label for="HoVaTen">Họ Tên</label>
                  <input type="text" name="HoVaTen" class="form-control" id="HoVaTen" placeholder="Họ Tên">
                </div>
                <div class="form-group">
                    <label for="SoDienThoai">Số điện thoại</label>
                    <input type="text" name="SoDienThoai" class="form-control" id="SoDienThoai" placeholder="Phone">
                </div> 
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" name="Email" class="form-control" id="Email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="DiaChi">Địa chỉ</label>
                    <input type="text" name="DiaChi" class="form-control" id="DiaChi" placeholder="Địa chỉ">
                </div>   
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('/admin/khachhang/index') }}" class="btn btn-danger">Back</a> 
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</section>
@endsection
