@extends('master.app')
@section('title') Tambah Training @endsection
@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="/AdminLTE/plugins/select2/select2.min.css">
<link rel="stylesheet" href="/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css">
@endsection
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List Training</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/training">List Training</a></li>
              <li class="breadcrumb-item active">Tambah List Training</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah List Training</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form role="form" action="store" method="post">
          {{csrf_field()}}
          <div class="card-body">
            <div class="col-sm-6" style="float:left">
              <div class="form-group">
                <label>ID</label>
                <input name="id_training" type="number" class="form-control" id="id_training" placeholder="Masukkan ID Training" required>
              </div>
            </div>
            <div class="col-sm-6" style="float:left">
              <div class="form-group">
                <label> <i class="fa fa-calendar"></i> Tanggal:</label>
                <input name="tanggal_training" type="date" class="form-control" id="tanggal_training" placeholder="Masukkan Tanggal Training" required>
                <!-- /.input group -->
              </div>
            </div>
            <div class="form-group">
              <label for="nama_training">Nama Training</label>
              <input name="nama_training" type="text" class="form-control" id="nama_training" placeholder="Masukkan Nama Training" required>
            </div>
            <div class="bootstrap-timepicker col-sm-6" style="float: left">
              <div class="form-group">
                <label><i class="fa fa-clock-o"></i> Jam Mulai:</label>
                <input name="time_start" type="time" class="form-control" required>
              </div>
              <!-- /.form group -->
              </div>
            <div class="bootstrap-timepicker col-sm-6" style="float: left">
              <div class="form-group">
                <label><i class="fa fa-clock-o"></i> Jam Selesai:</label>
                <input name="time_finish" type="time" class="form-control" required>
              </div>
                <!-- /.form group -->
              </div> 
            <div class="form-group col-sm-6" style="float: left">
              <label for="id_media">Media</label>
              <select name="id_media" class="form-control select2" style="width: 100%;">
                @foreach($media as $m)
                <option value="{{$m->id_media}}">{{$m->nama_media}} ({{$m->kategori_media}})</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-sm-6" style="float: left">
              <label for="id_topik">Topik</label>
              <select name="id_topik" class="form-control select2" style="width: 100%;">
                @foreach($topik as $t)
                <option value="{{$t->id_topik}}">{{$t->nama_topik}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-sm-6" style="float: left">
              <label for="id_kompetensi">Kompetensi</label>
              <select name="id_kompetensi" class="form-control select2" style="width: 100%;">
                @foreach($kompetensi as $k)
                <option value="{{$k->id_kompetensi}}">{{$k->nama_kompetensi}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-sm-6" style="float: left">
              <label for="id_penyelenggara">Penyelenggara</label>
              <select name="id_penyelenggara" class="form-control select2" style="width: 100%;">
                @foreach($penyelenggara as $p)
                <option value="{{$p->id_penyelenggara}}">{{$p->nama_penyelenggara}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-sm-6" style="float: left">
              <label for="harga_training">Harga</label>
              <input name="harga_training" type="number" class="form-control" id="harga_training" placeholder="Masukkan Harga Training" required>
            </div>
            <div class="form-group col-sm-6" style="float: left">
              <label for="invoice_training">Invoice</label>
              <input name="invoice_training" type="number" class="form-control" id="invoice_training" placeholder="Masukkan Invoice Training" required>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
@endsection
@section('script')
<!-- jQuery -->
<script src="/AdminLTE/plugins/jquery/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="/AdminLTE/plugins/select2/select2.full.min.js"></script>
<script src="/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
@endsection

