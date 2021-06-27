@extends('layout.v_template')
@section('title','Pencarian')

@section('custom-script')
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('template/') }}/plugins/select2/css/select2.min.css">
  {{-- <link rel="stylesheet" href="{{ asset('template/') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"> --}}
@endsection

@section('custom-script-footer')
  <script src="{{ asset('template/') }}/plugins/select2/js/select2.full.min.js"></script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    });
  </script>
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Masukkan informasi pencarian pada form berikut</h3>
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
                    <select class="select2" name="inputTags[]" multiple="multiple" data-placeholder="Masukkan Topik" style="width: 100%;">
                      @foreach ($topics as $topic)
                        <option>{{ $topic }}</option>
                      @endforeach
                      {{-- <option>kelembagaan</option>
                      <option>kepengurusan</option>
                      <option>penyertaan modal</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option> --}}
                    </select>                  </div>
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
