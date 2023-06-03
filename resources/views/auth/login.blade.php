@include('vendor.layouts.includes.auth_head')
<body class="account-page">
<div class="main-wrapper">
<div class="account-content">
<div class="login-wrapper">
<div class="login-content">
<div class="login-userset">
<div class="login-logo">
<img src="{{asset('vendor_assets/img/logo.png')}}" alt="img">
</div>
<div class="login-userheading">
<h3>Sign In</h3>
<h4>Please login to your account</h4>
</div>
<form action="{{route('login')}}" method="POST">@csrf
<div class="form-login">
<label>Email</label>
<div class="form-addons">
<input type="email" name="email" placeholder="Enter your email address">
<img src="{{asset('vendor_assets/img/icons/mail.svg')}}" alt="img">
</div>
</div>
<div class="form-login">
<label>Password</label>
<div class="pass-group">
<input type="password" name="password"class="pass-input" placeholder="Enter your password">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
<div class="form-login">
<div class="alreadyuser">
<h4><a href="{{route('password.request')}}" class="hover-a">Forgot Password?</a></h4>
</div>
</div>
<div class="form-login">
<button type="submit" class="btn btn-login">Sign In</button>
</div>
</form>
<div class="signinform text-center">
<h4>Don’t have an account? <a href="{{route('register')}}" class="hover-a">Sign Up</a></h4>
</div>
</div>
</div>
<div class="login-img">
<img src="{{asset('vendor_assets/img/login.jpg')}}" alt="img">
</div>
</div>
</div>
</div>
@include('vendor.layouts.includes.auth_script')