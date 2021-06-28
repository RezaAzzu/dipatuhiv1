@extends('layout.v_template')
@section('title','Penambahan')

@section('custom-script')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('template/') }}/plugins/select2/css/select2.min.css">
{{-- <link rel="stylesheet" href="{{ asset('template/') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
--}}
<!-- summernote -->
<link rel="stylesheet" href="{{asset('template/')}}/plugins/summernote/summernote-bs4.min.css">

<!-- Field v3 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
  integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
  integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
  crossorigin="anonymous" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"
  integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg=="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js"
  integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg=="
  crossorigin="anonymous"></script>
<style type="text/css">
  .bootstrap-tagsinput {
    width: 100%;
  }

  .label-info {
    background-color: #26a10e;

  }

  .label {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out,
      border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  }
</style>
@endsection

@section('custom-script-footer')
<!-- Select2 -->
<script src="{{ asset('template/') }}/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="{{asset('template/')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
      //Initialize Summernote Elements
      $('.summernote').summernote({
        toolbar: [
          // [groupName, [list of button]]
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['view', ['fullscreen', 'codeview', 'help']],
        ]
      });
    });
</script>


@endsection


@section('content')

<!-- Main content -->
<div class="content">
  <!--Tambah pertanyaan-->
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
          <form action="{{ route('penambahan.tambah') }}" method="POST">
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

  <!--Tambah topik-->
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header bg-success">
            <h3 class="card-title">Masukkan topik baru pada form berikut</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('penambahan.tambahTopik') }}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputTags">Topik (tag) yang Sudah Ada</label>
                <select class="select2" name="inputTags[]" multiple="multiple"
                  data-placeholder="Klik untuk Melihat Topik yang Sudah Ada" style="width: 100%;">
                  @foreach ($topics as $topic)
                  <option disabled="disabled">{{ $topic }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputPertanyaan">Topik yang Ditambahkan</label>
                <input name="inputTags" type="text" data-role="tagsinput" name="tags" class="form-control">
              </div>
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
<!-- /.content -->

@endsection