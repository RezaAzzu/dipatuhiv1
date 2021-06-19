@extends('layout.v_template')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Halaman Pencarian <small> </small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Masukkan isian pada form berikut</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label>Industri</label>
                    <select class="form-control">
                      <option>Asuransi dan reasuransi</option>
                      <option>Dana Pensiun</option>
                      <option>Pembiayaan</option>
                      <option>Pergadaian</option>
                      <option>Modal Ventura</option>
                      <option>Pergadaian</option>
                      <option>Lembaga Keuangan Mikro</option>                     
                      <option>Keuangan Khusus</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Topik (tag)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Topik">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keyword</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="keyword">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cari</button>
                </div>
              </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
            
          <!--/.col (left) -->
          <!-- right column -->
          
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.content -->

@endsection
