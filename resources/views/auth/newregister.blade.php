 <html lang="en" class="fullscreen-bg">
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="viewport" content="width=device-width,initial-scale=1">
	 
  <!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('user/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('user/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('user/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('user/assets/css/main.css 	')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('user/assets/css/demo.css')}}">
  <link rel="stylesheet" href="{{asset('user/assets/css/login.css')}}">
  <!-- GOOGLE FONTS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
  <link rel="icon" href="{{asset('user/assets/icon.png')}}" style="width: 100px;">
    <!-- TABLES -->


</head>

<body style="background-color: #47D1EC;">

<div class="login-page">

  
  <div class="form">
       
    <div class="header">
    <a href="/"><img src="{{asset('user/assets/img/logo.png')}}" class="my-md-3 img-fluid" alt="logo"></a>
		<p class="lead" style="color: #00d8ff"><b>Register</b></p>
	</div>
	<form action="{{ route('register') }}" method="POST">
		@csrf

    <div class="form-group">
    <label for="signin-email" class="control-label lab">Nama</label>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
    @error('name')
    <span class="invalid-feedback" role="alert">
    <span class="help-block">{{ $message }}</span>
    </span>
    @enderror             
    </div>

    
    <div class="form-group">
    <label for="signin-email" class="control-label lab">Email</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

    @error('email')
    <span class="help-block" role="alert">
    <span>{{ $message }}</span>
    </span>
    @enderror
    </div>

    
    <div class="form-group">
    <label for="signin-email" class="control-label lab">Alamat</label>
    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" autocomplete="alamat" autofocus>
    @error('alamat')
    <span class="help-block" role="alert">
    <span>{{ $message }}</span>
    </span>
    @enderror
    </div>
    
    <div class="form-group">
        <label for="signin-email" class="control-label lab">Tanggal Lahir</label>

            <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" autocomplete="tanggal_lahir" autofocus>

            @error('tanggal_lahir')
                <span class="help-block" role="alert">
                    <span>{{ $message }}</span>
                </span>
            @enderror
        
    </div>


    <div class="form-group">
    <label for="signin-email" class="control-label lab">No HP</label>
   <input id="no_hp" type="number" min="1" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" autocomplete="no_hp" autofocus>

    @error('no_hp')
    <div class="help-block" role="alert">
    <span>{{ $message }}</span>
    </div>
    @enderror
    </div>
    
    <div class="form-group">
    <label for="signin-email" class="control-label lab">Password</label>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
    @error('password')
    <div class="help-block" role="alert">
    <span>{{ $message }}</span>
    </div>
    @enderror      
    </div>
    
    <div class="form-group">
   <label for="signin-email" class="control-label lab">Confirmasi Password</label>

    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
   
    </div>



  <input type="submit" class="btn btn-primary  btn-md btn-block text-uppercase" style="border-radius:10px; background-color:#00d8ff; border-color:#00d8ff; margin-top:50px;" value="Register" style="text-align: center;">
	<div class="bottom" style="padding-top:10px;">
	<span class="helper-text">Sudah Memiliki Akun ? <a href="/login">Login</a></span>
  </div>
</form>  

</div>
</div>


	</body>

 
</html>

<script src="{{asset('user/assets/vendor/jquery/jquery.min.js')}}"></script>
	

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	


