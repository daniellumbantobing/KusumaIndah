 <html lang="en" class="fullscreen-bg">
<head>
	<title>Reset Password</title>
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
    
		<p class="lead" style="color: #00d8ff"><b>Reset Password</b></p>
	</div>
		   <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                           <label for="signin-email" class="control-label lab">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="help-block" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group">
                          
                          <label for="signin-email" class="control-label lab">Pasword</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="help-block" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                          <label for="signin-email" class="control-label lab">Confirmasi Pasword</label>
                          
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                        </div>

                      <input type="submit" class="btn btn-primary  btn-md btn-block text-uppercase" style="border-radius:10px; background-color:#00d8ff; border-color:#00d8ff; margin-top:50px;" value="Reset Password" style="text-align: center;">

                    </form>

</div>
</div>


	</body>

 
</html>

<script src="{{asset('user/assets/vendor/jquery/jquery.min.js')}}"></script>
	

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	