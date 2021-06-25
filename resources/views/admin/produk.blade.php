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
              <h4 class="modal-title">Tambah Produk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                <form action="{{url('/create/produk')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" class="form-control  @if($errors->has('nama_produk')) is-invalid   @endif" name="nama_produk" value="{{old('nama_produk')}}" id="exampleInputEmail1" placeholder="Nama Produk">
                  
                        <Center>  @if($errors->has('nama_produk'))
                                   <span class="inv">{{$errors->first('nama_produk')}}</span>
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
                <div class="form-group">
                        <label>Nama Travel</label>
                         <input type="text" class="form-control  @if($errors->has('nama_travel')) is-invalid   @endif" name="nama_travel" value="{{old('nama_travel')}}" id="exampleInputEmail1" placeholder="Nama Travel">
                 
                          <Center>  @if($errors->has('nama_travel'))
                                   <span class="inv">{{$errors->first('nama_travel')}}</span>
                               @endif
                        </Center>
                      </div>


                      
                     <div class="form-group">
                        <label for="exampleInputEmail1">Itinerary</label>
                      
                  <textarea id="summernote3" placeholder="Itinerary" name="itinerary" class="form-control  @if($errors->has('itinerary')) is-invalid   @endif">
                    {{old('itinerary')}}
                  </textarea>
                  <Center>  @if($errors->has('itinerary'))
                                      <span class="inv">{{$errors->first('itinerary')}}</span>
                                  @endif
                            </Center>
                  </div>
          
                  
                    <div class="form-group">
                        <label>Harga</label>
                         <input type="number" min="1" class="form-control  @if($errors->has('harga')) is-invalid   @endif" name="harga" value="{{old('nama_travel')}}" id="exampleInputEmail1" placeholder="Harga">
                 
                          <Center>  @if($errors->has('harga'))
                                   <span class="inv">{{$errors->first('harga')}}</span>
                               @endif
                        </Center>
                      </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1">Fasilitas</label>
                      
                  <textarea id="summernote2" placeholder="Fasilitas" name="fasilitas" class="form-control  @if($errors->has('fasilitas')) is-invalid   @endif">
                    {{old('fasilitas')}}
                  </textarea>
                  <Center>  @if($errors->has('fasilitas'))
                                      <span class="inv">{{$errors->first('fasilitas')}}</span>
                                  @endif
                            </Center>
                  </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Notes</label>
                      
                  <textarea id="summernote1" placeholder="Notes" name="notes" class="form-control  @if($errors->has('notes')) is-invalid   @endif">
                    {{old('notes')}}
                  </textarea>
                  <Center>  @if($errors->has('notes'))
                                      <span class="inv">{{$errors->first('notes')}}</span>
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
                      <label for="exampleFormControlSelect1">Kategori</label>
                      <select class="form-control   @if($errors->has('type')) is-invalid   @endif" id="exampleFormControlSelect1" name="type">
                     	<option value="" selected disabled> Kategori</option>
                          <option value="Open Trip">Open Trip</option>
                        <option value="Private Trip">Private Trip</option>
                     
                      </select>

                       <Center>  @if($errors->has('type'))
                                      <span class="inv">{{$errors->first('type')}}</span>
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
          @foreach ($produk as $kt )
              
          
          <div class="modal fade" id="modal-edit{{$kt->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Produk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                <form action="/edit/{{$kt->id}}/produk" method="post" enctype="multipart/form-data">
                  @csrf
                  
                       <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" class="form-control  @if($errors->has('nama_produk')) is-invalid   @endif" name="nama_produk" value="{{$kt->nama_produk}}" id="exampleInputEmail1" placeholder="Nama Produk">
                  
                        <Center>  @if($errors->has('nama_produk'))
                                   <span class="inv">{{$errors->first('nama_produk')}}</span>
                               @endif
                        </Center>
                    </div>
                  
                 
               
                      <div class="form-group">
                    <label for="exampleInputFile">Gambar 1</label>
                    <br>
                       <img src="{{asset('product/'.$kt->gbr1)}}" alt="gambar1" style="width: 150px; height:150px;">
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
                    <img src="{{asset('product/'.$kt->gbr2)}}" alt="gambar1" style="width: 150px; height:150px;">
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
                    <img src="{{asset('product/'.$kt->gbr3)}}" alt="gambar1" style="width: 150px; height:150px;">
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
                    <img src="{{asset('product/'.$kt->gbr4)}}" alt="gambar1" style="width: 150px; height:150px;">
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
                    <img src="{{asset('product/'.$kt->gbr5)}}" alt="gambar1" style="width: 150px; height:150px;">
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


                   <div class="form-group">
                        <label>Nama Travel</label>
                         <input type="text" class="form-control  @if($errors->has('nama_travel')) is-invalid   @endif" name="nama_travel" value="{{$kt->nama_travel}}" id="exampleInputEmail1" placeholder="Nama Travel">
                 
                          <Center>  @if($errors->has('nama_travel'))
                                   <span class="inv">{{$errors->first('nama_travel')}}</span>
                               @endif
                        </Center>
                      </div>



                                 <div class="form-group">
                        <label for="exampleInputEmail1">Itinerary</label>
                      
                  <textarea id="summernote5" placeholder="Itinerary" name="itinerary" class="form-control  @if($errors->has('itinerary')) is-invalid   @endif">
                   {{$kt->itenerary}}
                  </textarea>
                  <Center>  @if($errors->has('itinerary'))
                                      <span class="inv">{{$errors->first('itinerary')}}</span>
                                  @endif
                            </Center>
                  </div>
          
                  
                    <div class="form-group">
                        <label>Harga</label>
                         <input type="number" min="1" class="form-control  @if($errors->has('harga')) is-invalid   @endif" name="harga" value="{{$kt->harga}}" id="exampleInputEmail1" placeholder="Harga">
                 
                          <Center>  @if($errors->has('harga'))
                                   <span class="inv">{{$errors->first('harga')}}</span>
                               @endif
                        </Center>
                      </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1">Fasilitas</label>
                      
                  <textarea id="summernote6" placeholder="Fasilitas" name="fasilitas" class="form-control  @if($errors->has('fasilitas')) is-invalid   @endif">
                    {{$kt->fasilitas}}
                  </textarea>
                  <Center>  @if($errors->has('fasilitas'))
                                      <span class="inv">{{$errors->first('fasilitas')}}</span>
                                  @endif
                            </Center>
                  </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Notes</label>
                      
                  <textarea id="summernote7" placeholder="Notes" name="notes" class="form-control  @if($errors->has('notes')) is-invalid   @endif">
                    {{$kt->notes}}
                  </textarea>
                  <Center>  @if($errors->has('notes'))
                                      <span class="inv">{{$errors->first('notes')}}</span>
                                  @endif
                            </Center>
                  </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                      
                  <textarea id="summernote8" placeholder="Deskripsi" name="deskripsi" class="form-control  @if($errors->has('deskripsi')) is-invalid   @endif">
                     {{$kt->deskripsi}}
                  </textarea>
                  <Center>  @if($errors->has('deskripsi'))
                                      <span class="inv">{{$errors->first('deskripsi')}}</span>
                                  @endif
                            </Center>
                  </div>
          
                  
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Kategori</label>
                      <select class="form-control   @if($errors->has('type')) is-invalid   @endif" id="exampleFormControlSelect1" name="type">
                     	<option value="{{$kt->type}}" selected> {{$kt->type}}</option>
                          <option value="Open Trip">Open Trip</option>
                        <option value="Private Trip">Private Trip</option>
                     
                      </select>

                       <Center>  @if($errors->has('type'))
                                      <span class="inv">{{$errors->first('type')}}</span>
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
                 Tambah Produk
                </button>
                </div>
            </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Nama Travel</th>
                    <th>Kategori</th>
                    <th>Creted Date</th>
                    <th>Last Update Date</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($produk as $key=>$kt)
                        
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$kt->nama_produk}}</td>
                      <td>@currency($kt->harga)</td>
                      <td>{{$kt->nama_travel}}</td>
                      <td>{{$kt->type}}</td>
                      <td>{{$kt->created_at}}</td>
                      <td>{{$kt->updated_at}}</td>
                      
                      <td>
                           <a href="#" class="btn btn-danger btn-sm delete" nama-produk="{{$kt->nama_produk}}" produk-id="{{$kt->id}}">Delete</a>
									
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
		  text: 'Mau menghapus data produk dengan nama '+"'"+ nama_produk +"'"+ ' ??',
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  
		  if (willDelete) {
		    window.location = "/delete/"+produk_id+"/produk";
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
    // Summernote
    $('#summernote1').summernote()

    
  })
</script>
<script>
      $(function () {
    // Summernote
    $('#summernote2').summernote()

    
  })
</script>
<script>
      $(function () {
    // Summernote
    $('#summernote3').summernote()

    
  })
</script>
<script>
      $(function () {
    // Summernote
    $('#summernote4').summernote()

    
  })
</script>
<script>
      $(function () {
    // Summernote
    $('#summernote5').summernote()

    
  })
</script>
<script>
      $(function () {
    // Summernote
    $('#summernote6').summernote()

    
  })
</script>
<script>
      $(function () {
    // Summernote
    $('#summernote7').summernote()

    
  })
</script>
<script>
      $(function () {
    // Summernote
    $('#summernote8').summernote()

    
  })
</script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endsection