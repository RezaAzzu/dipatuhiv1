@extends('layout.v_template')
@section('title','Penambahan')

@section('custom-script')
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    // Button DOM
    let btn = document.getElementById("btn-tambah");

    // Adding event listener to button
    btn.addEventListener("click", () => {

        // Fetching Button value
        // let btnValue = btn.value;
        let btnValue = $('#summernote').summernote('code');

        // jQuery Ajax Post Request
        $.post('/penambahan/tambah', {
            btnValue: btnValue
        }, (response) => {
            // response from PHP back-end
            console.log(response);
        });
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
              <div class="card-header">
                <h3 class="card-title">Masukkan isian pada form berikut</h3>
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
                      <input name="inputTags" type="text" data-role="tagsinput" name="tags" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputPertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" name="inputPertanyaan" id="inputPertanyaan" placeholder="Masukkan Pertanyaan">
                  </div>
                  <div class="form-group">
                    <label>Jawaban</label>
                    <div id="summernote"></div>
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
