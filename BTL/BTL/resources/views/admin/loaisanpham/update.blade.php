
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
              <form id="quickForm" action="{{route('update',['id' => $db->id])}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="maloaisanpham">Mã loại</label>
                        <input type="text" name="id" value="{{ $db->id }}" class="form-control" id="id" placeholder="Mã sản phẩm">
                      </div>
                  <div class="form-group">
                    <label for="tenloaisanpham">Tên loại sản phẩm</label>
                    <input type="text" name="TenLOp" value="{{ $db->TenLOp }}" class="form-control" id="TenLOp" placeholder="Tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <input type="text" name="MoTa" value="{{ $db->MoTa }}" class="form-control" id="MoTa" placeholder="Mô tả">
                  </div>               
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('index') }}" class="btn btn-danger">Back</a> 
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