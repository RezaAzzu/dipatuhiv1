@extends('layout.v_template')
@section('title','Halaman Hasil Penambahan')

@section('custom-script')
<script type="text/javascript">
  $(window).on('load', function() {
    
      $('#modal-success').modal('show');
      
  });
</script>

@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            @foreach ($items as $item)
            <div class="col-sm-10 col-md-6">
              <div class="color-palette-set">
                <div class="bg-success color-palette">
                  <span><label>{{ $item['industri'] }}</label></span>
                  <br/>
                  {{-- <span class="description">Dicatat pertama kali pada </span> --}}
                </div>                
              </div>
              
            </div>
            
          
            <div class="card card-success card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Pertanyaan: {{ $item['pertanyaan'] }}</h5>
              </div>
              <div class="card-header">
                <h5 class="card-title m-0">Topik:
                  @foreach ($item['tags'] as $tag)
                    {{ $tag . '; ' . ' ' }}
                  @endforeach</h5>
              </div>
              
              <div class="card-body">
                <h6 class="card-title">Jawaban</h6>
                <p class="card-text">{!! $item['jawaban'] !!}</p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
              </div>
            </div>
            @endforeach   
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content -->

@endsection

@section('modal-success')
<div class="modal fade" id="modal-success" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-success">
      <div class="modal-header">
        <h4 class="modal-title">Berhasil</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Data berhasil ditambahkan</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tutup</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection
