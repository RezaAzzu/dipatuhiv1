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
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Masukkan isian pada form berikut</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pencarian/cari" method="GET">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Industri</label>
                    <select name="inputIndustri" id="inputIndustri" class="form-control">
                      <option value="1">Asuransi dan reasuransi</option>
                      <option value="2">Dana Pensiun</option>
                      <option value="3">Pembiayaan</option>
                      <option value="4">Pergadaian</option>
                      <option value="5">Modal Ventura</option>
                      <option value="6">Lembaga Keuangan Mikro</option>                     
                      <option value="7">Keuangan Khusus</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputTags">Topik (tag)</label>
                    {{-- <input type="text" class="form-control" name="inputTags[]" id="inputTag" placeholder="Masukkan Topik">                                   --}}
                    {{-- <select multiple name="inputTags" data-role="tagsinput" class="sr-only"> --}}
                      {{--<option value="Amsterdam" selected="selected">Amsterdam</option>
                       <option value="Washington" selected="selected">Washington</option>
                      <option value="Sydney" selected="selected">Sydney</option>
                      <option value="Beijing" selected="selected">Beijing</option>
                      <option value="Cairo" selected="selected">Cairo</option>    --}}                 
                    {{-- </select> --}}
                    <div class="card-body">
                      <label>Tags :</label>
                      <input name="inputTags" type="text" data-role="tagsinput" name="tags" class="form-control">
                    </div>
  
                  </div>
                  <div class="form-group">
                    <label for="inputKeywords">Keyword</label>
                    <input type="text" class="form-control" name="inputKeywords" id="inputKeywords" placeholder="Masukkan Keyword">
                  </div>
                  {{-- <div class="form-group"> 
                    <select multiple data-role="tagsinput">
                      <option value="Amsterdam">Amsterdam</option>
                      <option value="Washington">Washington</option>
                      <option value="Sydney">Sydney</option>
                      <option value="Beijing">Beijing</option>
                      <option value="Cairo">Cairo</option>
                    </select>
                  </div> --}}

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
