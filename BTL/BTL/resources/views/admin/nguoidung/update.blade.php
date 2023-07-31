
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
                <h3 class="card-title">Sửa người dùng mới</h3>
              </div>
              <!-- form start -->
              <form id="quickForm" action="{{route('/admin/nguoidung/update')}}" method="post">
                @csrf
                <div class="card-body">
                <div class="form-group">
                  <label for="UserName">Name</label>
                  <input type="text" name="name" value="{{ $db->name }}" class="form-control" id="UserName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="PassWord">PassWord</label>
                    <input type="text" name="password" value="{{ $db->password }}" class="form-control" id="PassWord" placeholder="PassWord">
                  </div>
                  
                <div class="form-group">
                  <label for="anh">Ảnh</label>
                  <input type="file" name="Anh" value="{{ $db->Anh }}" class="form-control" id="Anh" placeholder="Ảnh">
                </div>
                
                <div class="form-group">
                    <label for="DienThoai">Số điện thoại</label>
                    <input type="text" name="DienThoai" value="{{ $db->DienThoai }}" class="form-control" id="DienThoai" placeholder="Phone">
                </div> 
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" name="email" value="{{ $db->email }}" class="form-control" id="Email" placeholder="Email">
                </div>
                 
                <div class="form-group">
                  <label for="TrangThai">Trạng thái</label>
                  <select class="form-control" name="TrangThai" id="TrangThai">
                      @foreach(['1' => 'Hoạt động', '0' => 'Không hoạt động'] as $value => $text)
                          <option value="{{ $value }}" {{ $value == $db->TrangThai ? 'selected' : '' }}>
                              {{ $text }}
                          </option>
                      @endforeach
                  </select>
                </div>
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('/admin/nguoidung/index') }}" class="btn btn-danger">Back</a> 
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
