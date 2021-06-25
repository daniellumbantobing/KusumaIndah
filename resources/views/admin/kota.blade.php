@extends('layouts.main')
@section('title','Kota')
@section('header')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  
@section('content')
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kota</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                <form action="/create/kota" method="post">
                  @csrf
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kota</label>
                    <input type="text" class="form-control  @if($errors->has('nama_kota')) is-invalid   @endif" name="nama_kota" value="{{old('kota')}}" id="exampleInputEmail1" placeholder="Nama Kota">
                  
                        <Center>  @if($errors->has('nama_kota'))
                                   <span class="inv">{{$errors->first('nama_kota')}}</span>
                               @endif
                        </Center>
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
          @foreach ($kota as $kt )
              
          
          <div class="modal fade" id="modal-edit{{$kt->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Kota</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                <form action="/edit/{{$kt->id}}/kota" method="post">
                  @csrf
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kota</label>
                    <input type="text" class="form-control  @if($errors->has('nama_kota')) is-invalid   @endif" name="nama_kota" value="{{$kt->nama_kota}}" id="exampleInputEmail1" placeholder="Nama Kota">
                  
                        <Center>  @if($errors->has('nama_kota'))
                                   <span class="inv">{{$errors->first('nama_kota')}}</span>
                               @endif
                        </Center>
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
            <h1>Data Kota</h1>
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
                <h3 class="card-title">Kota</h3>
                <div class="float-right">

                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                 Add Kota
                </button>
                </div>
            </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kota</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($kota as $key=>$kt)
                        
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$kt->nama_kota}}</td>
                      <td>
                           <a href="#" class="btn btn-danger btn-sm delete" nama-produk="{{$kt->nama_kota}}" produk-id="{{$kt->id}}">Delete</a>
									
                           <button type="button" class="btn  btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit{{$kt->id}}">
                 Edit
                </button>
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
<!-- AdminLTE App -->
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
		  text: "Mau menghapus data kota dengan nama " +nama_produk + "??",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  
		  if (willDelete) {
		    window.location = "/delete/"+produk_id+"/kota";
		  } 
		}); 
	});
</script>
@endsection