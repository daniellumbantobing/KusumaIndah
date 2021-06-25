@extends('layouts.main')
@section('title','View Artikel')
@section('header')
@section('content')


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-4">
            

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    View Artikel  {!! $art->judul !!}
                    <small class="float-right">Tanggal Dibuat: {{$art->created_at->format('d M Y  H:i')}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row">
                
                <div class="col-sm-12"><br>
                    <h5>Deskripsi:</h5>
                    {!! $art->deskripsi !!}
                </div>

                 <div class="col-sm-12"><br>
                    <h5>Tags:</h5>
                    {!! $art->tags !!}
                </div>
                <!-- /.col -->
            
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
            
              <br>
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-12">
                  <h5>Gambar:</h5>
                  <img src="{{asset('article/'.$art->gbr1)}}" alt="gambar1" style="width: 150px; height:150px;">
                  @if (!empty($art->gbr2))
                  
                  <img src="{{asset('article/'.$art->gbr2)}}" alt="gamba2" style="width: 150px; height:150px;">
                  @endif
                  @if (!empty($art->gbr3))
                      
                  <img src="{{asset('article/'.$art->gbr3)}}" alt="gambar3" style="width: 150px; height:150px;">
                  @endif
                  
                  @if (!empty($art->gbr4))
                      
                  <img src="{{asset('article/'.$art->gbr4)}}" alt="gambar4" style="width: 150px; height:150px;">
                  @endif
                  
                  @if (!empty($art->gbr5))
                  
                  <img src="{{asset('article/'.$art->gbr5)}}" alt="gambar5" style="width: 150px; height:150px;">
                  @endif
                  
                  
                  
                </div>
       
                <!-- /.col -->
              </div>
              <!-- /.row -->

           
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection