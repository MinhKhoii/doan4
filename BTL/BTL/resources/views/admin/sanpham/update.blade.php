
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
                <h3 class="card-title">Sửa loại sản phẩm</h3>
              </div>
              <!-- form start -->
              <form id="quickForm" action="{{route('/admin/sanpham/update',['id' => $db->id])}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="tensanpham">Tên sản phẩm</label>
                        <input type="text" name="TenOp" value="{{ $db->TenOp }}" class="form-control" id="TenOp" placeholder="Tên sản phẩm">
                      </div>
                      <div class="form-group">
                        <label for="anh">Ảnh</label>
                        <input type="file" name="Anh" value="{{ $db->Anh }}" class="form-control" id="Anh" placeholder="Ảnh">
                        <input type="text" name="Anh" value="{{ $db->Anh }}" class="form-control" id="Anh" placeholder="Ảnh">
                      </div>
                      <div class="form-group">
                        <label for="Giaban">Giá bán</label>
                        <input type="text" name="Giaban" value="{{ $db->Giaban }}" class="form-control" id="Giaban" placeholder="Giá bán">
                      </div>
                      <div class="form-group">
                        <label for="Soluong">Số lượng</label>
                        <input type="text" name="Soluong" value="{{ $db->Soluong }}" class="form-control" id="Soluong" placeholder="Số lượng">
                      </div>
                      
                      <div class="form-group">
                        <label for="mota">Mô tả</label>
                        <input type="text" name="MoTa" value="{{ $db->MoTa }}" class="form-control" id="MoTa" placeholder="Mô tả">
                      </div>
                      <div class="form-group">
                        <label for="maloai">Mã loại</label>
                        <input type="text" name="MaLOp" value="{{ $db->MaLOp }}" class="form-control" id="maloai" placeholder="Mã loại">
                        
                      </div>
                      
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('/admin/sanpham/index') }}" class="btn btn-danger">Back</a> 
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