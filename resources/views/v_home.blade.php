@extends('layout.v_template')
@section('title','Halaman Awal')
@section('subtitle','Tanggapan Terbaru')

@section('content')
<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        @foreach ($items as $item)
        <div class="card card-widget">
          <div class="card-header bg-primary ">
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
              <span class="username">
                <h6>Dicatat pertama kali pada {{ date('Y-m-d H:i:s') }}</h6>
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
          <!-- /.attachment-pushed -->
        </div>
        <!-- /.attachment-block -->

        <!-- Social sharing buttons
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
            <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
            <span class="float-right text-muted">45 likes - 2 comments</span>
            -->
        @endforeach
      </div>
      <!-- /.card-body -->

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.content -->
@endsection