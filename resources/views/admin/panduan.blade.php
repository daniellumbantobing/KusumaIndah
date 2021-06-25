@extends('layouts.main')
@section('header')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
 
@section('content')
<div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Panduan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                <form action="/panduan/tambah" method="post">
                  @csrf
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pertanyaan</label>
                      <input type="text" class="form-control" name="question" id="exampleInputEmail1" placeholder="pertanyaan">
                    </div>
                  
                    <div class="form-group">
                      <label>Jawaban</label>
                      <textarea class="form-control" rows="3" placeholder="jawaban" name="answer"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Kategori</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                        <option value="Open Trip">Open Trip</option>
                        <option value="Private Trip">Private Trip</option>
                        <option value="Travel Reguler">Travel Reguler</option>
                      </select>
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
 </div>
 @foreach ($panduan as $p )
    <div class="modal fade" id="modal-edit{{$p->id}}">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title">Edit Panduan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="/panduan/edit/{{$p->id}}" method="post">
            @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Pertanyaan</label>
                <input type="text" class="form-control  @if($errors->has('question')) is-invalid   @endif" name="question" value="{{$p->question}}" id="exampleInputEmail1" placeholder="pertanyaan">
              </div>

              <div class="form-group">
                <label>Jawaban</label>
                <textarea class="form-control" rows="3" placeholder="{{$p->answer}}" name="answer" value="{{$p->answer}}"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori</label>
                <select class="form-control" id="exampleFormControlSelect1" name="kategori" value="{{$p->kategori}}">
                  <option value="Open Trip">Open Trip</option>
                  <option value="Private Trip">Private Trip</option>
                  <option value="Travel Reguler">Travel Reguler</option>
                </select>
              </div>
          </div>

          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
            </form>  
          </div>
          </div>
        </div>
      @endforeach  
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Data Panduan</h1>
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
                <h3 class="card-title">Panduan</h3>
                <div class="float-right">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Tambah Panduan
                  </button>
                </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                    <th>Kategori</th>
                    <th>Created Date</th>
                    <th>Last Update Date</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($panduan as $key=>$p)
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$p->question}}</td>
                      <td>{{$p->answer}}</td>
                      <td>{{$p->kategori}}</td>
                      <td>{{$p->created_at}}</td>
                      <td>{{$p->updated_at}}</td>
                      <td>
                        <a href="#" class="btn btn-danger btn-sm delete" Nama-produk="{{$p->question}}" produk-id="{{$p->id}}">Delete</a>
						            <button type="button" class="btn  btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit{{$p->id}}">
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

<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- Page specific script -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": []
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
		  text: "Mau menghapus data Panduan ? ",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  
		  if (willDelete) {
		    window.location = "/panduan/hapus/"+produk_id;
		  } 
		}); 
	});
</script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endsection