@extends('layout.v_template')
@section('title','Halaman Hasil Penambahan')

@section('custom-script-footer')
<script>
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
        <div class="card card-widget">
          <div class="card-header bg-success ">
            <div class="user-block">
              <span class="username">
                <h4>{{ $item['pertanyaan'] }}</h4>
              </span>
              <span class="username">
                <h6>Industri {{ $item['industri'] }}</h6>
              </span>
              <span class="username">
                <h6>Topik:
                  @foreach ($item['tags'] as $tag)
                  {{ $tag . '; '}}
                  @endforeach
                </h6>
              </span>
            </div>
            <!-- /.user-block -->
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->

          <div class="card-body">
            <!-- post text -->
            {!! $item['jawaban'] !!}
            <!-- Attachment 
            <div class="attachment-block clearfix">
              <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">

              <div class="attachment-pushed">
                <h4 class="attachment-heading"><a href="https://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                <div class="attachment-text">
                  Description about the attachment can be placed here.
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                </div>
                <!-- /.attachment-text -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- Social sharing buttons
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
            <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
            <span class="float-right text-muted">45 likes - 2 comments</span>
            -->
        @endforeach
      </div>
      <!-- /.col-lg-10 -->
    </div>
    <!-- /.row -->
  </div>
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