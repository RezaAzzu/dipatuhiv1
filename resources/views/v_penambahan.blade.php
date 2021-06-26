@extends('layout.v_template')
@section('title','Penambahan')

@section('custom-script')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('template/') }}/plugins/select2/css/select2.min.css">
{{-- <link rel="stylesheet" href="{{ asset('template/') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
--}}
<!-- summernote -->
<link rel="stylesheet" href="{{asset('template/')}}/plugins/summernote/summernote-bs4.min.css">
@endsection

@section('custom-script-footer')
<script src="{{ asset('template/') }}/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
      //Initialize Summernote Elements
      $('.summernote').summernote();
    });
</script>
@endsection


@section('content')

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header bg-success">
            <h3 class="card-title">Masukkan pertanyaan dan jawaban terbaru pada form berikut</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/penambahan/tambah" method="POST">
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
                <select class="select2" name="inputTags[]" multiple="multiple" data-placeholder="Masukkan Topik"
                  style="width: 100%;">
                  @foreach ($topics as $topic)
                  <option>{{ $topic }}</option>
                  @endforeach
              </select>
              </div>
              <div class="form-group">
                <label for="inputPertanyaan">Pertanyaan</label>
                <input type="text" class="form-control" name="inputPertanyaan" id="inputPertanyaan"
                  placeholder="Masukkan Pertanyaan">
              </div>
              <div class="form-group">
                <label>Jawaban</label>
                {{-- <div name="inputJawaban" id="summernote"></div> --}}
                <textarea class="summernote" id="inputJawaban" name="inputJawaban"></textarea>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" id="btn-tambah" class="btn btn-primary">Tambah</button>
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