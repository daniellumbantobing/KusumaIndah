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
              <h4 class="modal-title">Tambah artikel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                <form action="{{url('/create/artikel')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control  @if($errors->has('judul')) is-invalid   @endif" name="judul" value="{{old('judul')}}" id="exampleInputEmail1" placeholder="Judul Artikel">
                  
                        <Center>  @if($errors->has('judul'))
                                   <span class="inv">{{$errors->first('judul')}}</span>
                               @endif
                        </Center>
                    </div>
                  

                  <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                      
                  <textarea id="summernote" placeholder="Deskripsi" name="deskripsi" class="form-control  @if($errors->has('deskripsi')) is-invalid   @endif">
                    {{old('deskripsi')}}
                  </textarea>
                  <Center>  @if($errors->has('deskripsi'))
                                      <span class="inv">{{$errors->first('deskripsi')}}</span>
                                  @endif
                            </Center>
                  </div>
          
                   
                  <div class="form-group">
                        <label>Tags</label>
                        <textarea class="form-control  @if($errors->has('tags')) is-invalid   @endif" rows="3" placeholder="Tags" name="tags">
                          {{old('tags')}}
                        </textarea>
                          <Center>  @if($errors->has('tags'))
                                   <span class="inv">{{$errors->first('tags')}}</span>
                               @endif
                        </Center>
                      </div>



                      <div class="form-group">
                    <label for="exampleInputFile">Gambar 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input @if($errors->has('gbr1')) is-invalid   @endif" id="exampleInputFile" name="gbr1" value="{{old('gbr1')}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <Center>  @if($errors->has('gbr1'))
                                   <span class="inv">{{$errors->first('gbr1')}}</span>
                               @endif
                        </Center>
                  </div>

                  
      <div id="accordion">
                <div class="card card-primary card-outline">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                               Tambah Foto Lagi
                            </h4>
                        </div>
                    </a>
                    <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                                              <div class="form-group">
                    <label for="exampleInputFile">Gambar 2(Optional)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input   @if($errors->has('gbr2')) is-invalid   @endif" id="exampleInputFile" name="gbr2"  value="{{old('gbr2')}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <Center>  @if($errors->has('gbr2'))
                                   <span class="inv">{{$errors->first('gbr2')}}</span>
                               @endif
                        </Center> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Gambar 3(Optional)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input  @if($errors->has('gbr3')) is-invalid   @endif" id="exampleInputFile" name="gbr3"  value="{{old('gbr3')}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <Center>  @if($errors->has('gbr3'))
                                   <span class="inv">{{$errors->first('gbr3')}}</span>
                               @endif
                        </Center>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Gambar 4(Optional)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input  @if($errors->has('gbr4')) is-invalid   @endif" id="exampleInputFile" name="gbr4"  value="{{old('gbr4')}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <Center>  @if($errors->has('gbr4'))
                                   <span class="inv">{{$errors->first('gbr4')}}</span>
                               @endif
                        </Center>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Gambar 5(Optional)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input  @if($errors->has('gbr5')) is-invalid   @endif" id="exampleInputFile" name="gbr5" value="{{old('gbr5')}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <Center>  @if($errors->has('gbr5'))
                                   <span class="inv">{{$errors->first('gbr5')}}</span>
                               @endif
                        </Center>
                  </div>

                        </div>
                    </div>
                </div>
              
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
          @foreach ($artikel as $kt )
              
          
          <div class="modal fade" id="modal-edit{{$kt->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Artikel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                <form action="/edit/{{$kt->id}}/artikel" method="post" enctype="multipart/form-data">
                  @csrf
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control  @if($errors->has('judul')) is-invalid   @endif" name="judul" value="{{$kt->judul}}" id="exampleInputEmail1" placeholder="Judul Artikel">
                  
                        <Center>  @if($errors->has('judul'))
                                   <span class="inv">{{$errors->first('judul')}}</span>
                               @endif
                        </Center>
                    </div>
                  

                  <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                      
                  <textarea id="summernote1" placeholder="Deskripsi" name="deskripsi" class="form-control  @if($errors->has('deskripsi')) is-invalid   @endif">
                    {{$kt->deskripsi}}
                  </textarea>
                  <Center>  @if($errors->has('deskripsi'))
                                      <span class="inv">{{$errors->first('deskripsi')}}</span>
                                  @endif
                            </Center>
                  </div>
          
                   
                  <div class="form-group">
                        <label>Tags</label>
                        <textarea class="form-control  @if($errors->has('tags')) is-invalid   @endif" rows="3" placeholder="Tags" name="tags">
                         {{$kt->tags}}
                        </textarea>
                          <Center>  @if($errors->has('tags'))
                                   <span class="inv">{{$errors->first('tags')}}</span>
                               @endif
                        </Center>
                      </div>
                 
               
                      <div class="form-group">
                    <label for="exampleInputFile">Gambar 1</label>
                    <br>
                       <img src="{{asset('article/'.$kt->gbr1)}}" alt="gambar1" style="width: 150px; height:150px;">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input @if($errors->has('gbr1')) is-invalid   @endif" id="exampleInputFile" name="gbr1" value="{{old('gbr1')}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <Center>  @if($errors->has('gbr1'))
                                   <span class="inv">{{$errors->first('gbr1')}}</span>
                               @endif
                        </Center>
                  </div>

                
                    
                  <div class="form-group">
                    <label for="exampleInputFile">Gambar 2</label>
                    <br>
                      @if (!empty($kt->gbr2))
                    <img src="{{asset('article/'.$kt->gbr2)}}" alt="gambar1" style="width: 150px; height:150px;">
                    @endif
                       <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input @if($errors->has('gbr2')) is-invalid   @endif" id="exampleInputFile" name="gbr2" value="{{old('gbr2')}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <Center>  @if($errors->has('gbr2'))
                                   <span class="inv">{{$errors->first('gbr2')}}</span>
                               @endif
                        </Center>
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputFile">Gambar 3</label>
                    <br>
                      @if (!empty($kt->gbr3))
                    <img src="{{asset('article/'.$kt->gbr3)}}" alt="gambar1" style="width: 150px; height:150px;">
                    @endif
                       <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input @if($errors->has('gbr3')) is-invalid   @endif" id="exampleInputFile" name="gbr3" value="{{old('gbr3')}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <Center>  @if($errors->has('gbr3'))
                                   <span class="inv">{{$errors->first('gbr3')}}</span>
                               @endif
                        </Center>
                  </div>

                    <div class="form-group">
                    <label for="exampleInputFile">Gambar 4</label>
                    <br>
                      @if (!empty($kt->gbr4))
                    <img src="{{asset('article/'.$kt->gbr4)}}" alt="gambar1" style="width: 150px; height:150px;">
                    @endif
                       <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input @if($errors->has('gbr4')) is-invalid   @endif" id="exampleInputFile" name="gbr4" value="{{old('gbr4')}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <Center>  @if($errors->has('gbr4'))
                                   <span class="inv">{{$errors->first('gbr4')}}</span>
                               @endif
                        </Center>
                  </div>

                    <div class="form-group">
                    <label for="exampleInputFile">Gambar 5</label>
                    <br>
                      @if (!empty($kt->gbr5))
                    <img src="{{asset('article/'.$kt->gbr5)}}" alt="gambar1" style="width: 150px; height:150px;">
                    @endif
                       <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input @if($errors->has('gbr5')) is-invalid   @endif" id="exampleInputFile" name="gbr5" value="{{old('gbr5')}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <Center>  @if($errors->has('gbr5'))
                                   <span class="inv">{{$errors->first('gbr5')}}</span>
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
            <h1>Data artikel</h1>
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
                <h3 class="card-title">artikel</h3>
                <div class="float-right">

                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                 Add artikel
                </button>
                </div>
            </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tags</th>
                    <th>Created Date</th>
                    <th>Last Update Date</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($artikel as $key=>$kt)
                        
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$kt->judul}}</td>
                      <td>{{$kt->tags}}</td>
                      <td>{{$kt->created_at}}</td>
                      <td>{{$kt->updated_at}}</td>
                      
                      <td>
                           <a href="#" class="btn btn-danger btn-sm delete" nama-produk="{{$kt->judul}}" produk-id="{{$kt->id}}">Delete</a>
									
                           <button type="button" class="btn  btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit{{$kt->id}}">
                        Edit
                   </button>
                       <a href="{{url('view/'.$kt->id.'/artikel')}}" target="_blank" class="btn btn-success btn-sm">View</a>
							
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
		  text: 'Mau menghapus data artikel dengan judul '+"'"+ nama_produk +"'"+ ' ??',
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  
		  if (willDelete) {
		    window.location = "/delete/"+produk_id+"/artikel";
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
</script>
<script>
      $(function () {
    // Summernote
    $('#summernote1').summernote()

    
  })
</script>
@endsection