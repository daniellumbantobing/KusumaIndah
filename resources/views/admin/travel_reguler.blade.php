@extends('layouts.main')
@section('header')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
 
@section('content')
<div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Travel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                <form action="/travel_reguler/tambah" method="post">
                  @csrf
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama Travel</label>
                    <input type="text" class="form-control  @if($errors->has('nama_travel')) is-invalid   @endif" name="nama_travel" value="{{old('nama_travel')}}" id="exampleInputEmail1" placeholder="nama travel">
                  
                        <Center>  @if($errors->has('nama_travel'))
                                   <span class="inv">{{$errors->first('nama_travel')}}</span>
                               @endif
                        </Center>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Asal Berangkat</label>
                        <input type="text" class="form-control  @if($errors->has('asal_berangkat')) is-invalid   @endif" name="asal_berangkat" value="{{old('asal_berangkat')}}" id="exampleInputEmail1" placeholder="asal berankat">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kota Tujuan</label>
                        <input type="text" class="form-control  @if($errors->has('tujuan')) is-invalid   @endif" name="tujuan" value="{{old('tujuan')}}" id="exampleInputEmail1" placeholder="tujuan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input type="date" class="form-control  @if($errors->has('tanggal')) is-invalid   @endif" name="tanggal" value="{{old('tanggal')}}" id="exampleInputEmail1" placeholder="tanggal">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jam</label>
                        <input type="time" class="form-control  @if($errors->has('jam')) is-invalid   @endif" name="jam" value="{{old('jam')}}" id="exampleInputEmail1" placeholder="jam">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kendaraan</label>
                        <input type="text" class="form-control  @if($errors->has('jenis_kendaraan')) is-invalid   @endif" name="jenis_kendaraan" value="{{old('jenis_kendaraan')}}" id="exampleInputEmail1" placeholder="jenis kendaraan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga</label>
                        <input type="number" class="form-control  @if($errors->has('harga')) is-invalid   @endif" name="harga" value="{{old('harga')}}" id="exampleInputEmail1" placeholder="harga">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Seat/Kursi</label>
                        <input type="text" class="form-control  @if($errors->has('seat')) is-invalid   @endif" name="seat" value="{{old('seat')}}" id="exampleInputEmail1" placeholder="seat">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input type="text" class="form-control  @if($errors->has('deskripsi')) is-invalid   @endif" name="deskripsi" value="{{old('deskripsi')}}" id="exampleInputEmail1" placeholder="deskripsi">
                    </div>
                </div>

              <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
              
            </div>
        </form>  
        </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div>
          @foreach ($travel_reguler as $tr )
              
          
          <div class="modal fade" id="modal-edit{{$tr->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Travel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                <form action="/travel_reguler/edit/{{$tr->id}}" method="post">
                  @csrf
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Travel</label>
                    <input type="text" class="form-control  @if($errors->has('nama_travel')) is-invalid   @endif" name="nama_travel" value="{{$tr->nama_travel}}" id="exampleInputEmail1" placeholder="nama travel">
                  
                        <Center>  @if($errors->has('nama_travel'))
                                   <span class="inv">{{$errors->first('nama_travel')}}</span>
                               @endif
                        </Center>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Asal Berangkat</label>
                        <input type="text" class="form-control  @if($errors->has('asal_berangkat')) is-invalid   @endif" name="asal_berangkat" value="{{$tr->asal_berangkat}}" id="exampleInputEmail1" placeholder="asal berankat">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kota Tujuan</label>
                        <input type="text" class="form-control  @if($errors->has('tujuan')) is-invalid   @endif" name="tujuan" value="{{$tr->tujuan}}" id="exampleInputEmail1" placeholder="tujuan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input type="date" class="form-control  @if($errors->has('tanggal')) is-invalid   @endif" name="tanggal" value="{{$tr->tanggal}}" id="exampleInputEmail1" placeholder="tanggal">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jam</label>
                        <input type="time" class="form-control  @if($errors->has('jam')) is-invalid   @endif" name="jam" value="{{$tr->jam}}" id="exampleInputEmail1" placeholder="jam">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kendaraan</label>
                        <input type="text" class="form-control  @if($errors->has('jenis_kendaraan')) is-invalid   @endif" name="jenis_kendaraan" value="{{$tr->jenis_kendaraan}}" id="exampleInputEmail1" placeholder="jenis kendaraan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga</label>
                        <input type="number" class="form-control  @if($errors->has('harga')) is-invalid   @endif" name="harga" value="{{$tr->harga}}" id="exampleInputEmail1" placeholder="harga">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Seat/Kursi</label>
                        <input type="text" class="form-control  @if($errors->has('seat')) is-invalid   @endif" name="seat" value="{{$tr->seat}}" id="exampleInputEmail1" placeholder="seat">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input type="text" class="form-control  @if($errors->has('deskripsi')) is-invalid   @endif" name="deskripsi" value="{{$tr->deskripsi}}" id="exampleInputEmail1" placeholder="deskripsi">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>  
        </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    @endforeach  
    </div>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Data Travel Reguler</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Travel Reguler</h3>
                <div class="float-right">

                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                 Tambah Travel
                </button>
                </div>
            </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Berangkat</th>
                    <th>Tujuan</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Jenis Kendaraan</th>
                    <th>Harga</th>
                    <th>Seat</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($travel_reguler as $key=>$tr)
                        
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$tr->nama_travel}}</td>
                      <td>{{$tr->asal_berangkat}}</td>
                      <td>{{$tr->tujuan}}</td>
                      <td>{{$tr->tanggal}}</td>
                      <td>{{$tr->jam}}</td>
                      <td>{{$tr->jenis_kendaraan}}</td>
                      <td>{{$tr->harga}}</td>
                      <td>{{$tr->seat}}</td>
                      <td>{{$tr->deskripsi}}</td>
                      <td>
                          <a href="#" class="btn btn-danger btn-sm delete" nama-produk="{{$tr->nama_travel}}" produk-id="{{$tr->id}}">Delete</a>
									        <button type="button" class="btn  btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit{{$tr->id}}">
                        Edit</button>
			                </td>
                    </tr>
              
                    @endforeach
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  


@endsection
@section('footer')
<!-- jQuery -->
<!-- Bootstrap 4 -->
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset("plugins/pdfmake/pdfmake.min.js")}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- Page specific script -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<style>
  .inv {
    
    width: 100%;
    margin-top: .25rem;
    font-size: 100%;
    color: #dc3545;
}
</style>
<script>
$('.delete').click(function(){
		  var produk_id = $(this).attr('produk-id');
          var nama_produk = $(this).attr('nama-produk');
		  swal({
		  title: "Yakin  ?",
		  text: "Mau menghapus data Travel " +nama_produk + "??",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  
		  if (willDelete) {
		    window.location = "/travel_reguler/hapus/"+produk_id;
		  } 
		}); 
	});
</script>
<script>
      $(function () {
    // Summernote
    $('#summernote').summernote()

    
  })
</script>
<script>
$(function () {
  bsCustomFileInput.init();
});

@endsection