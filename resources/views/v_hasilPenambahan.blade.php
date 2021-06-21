@extends('layout.v_template')
@section('title','Halaman Hasil Pencarian')

@section('content')
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            @foreach ($items as $item)
            <div class="col-sm-10 col-md-6">
              <div class="color-palette-set">
                <div class="bg-primary color-palette">
                  <span><label>{{ $item['industri'] }}</label></span>
                  <br/>
                  <span class="description">Dicatat pertama kali pada </span>
                </div>                
              </div>
              
            </div>
            
          
            <div class="card card-primary card-outline">
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
                <p class="card-text">{{ $item['jawaban'] }}</p>
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
