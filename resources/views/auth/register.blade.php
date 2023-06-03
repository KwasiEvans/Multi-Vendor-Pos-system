@include('vendor.layouts.includes.auth_head')

<div class="main-wrapper">
<div class="account-content">
<div class="login-wrapper">
<div class="login-content">
<div class="login-userset">
<div class="login-logo">
<img src="{{asset('vendor_assets/img/logo.png')}}" alt="img">
</div>
<div class="login-userheading">
<h3>Create an Account</h3>
<h4>Continue where you left off</h4>
</div>
<form action="{{route('register')}}" method="post">@csrf
<div class="form-login">
<label>Full Name</label>
<div class="form-addons">
<input type="text" name ="name" placeholder="Enter your full name">
<img src="{{asset('vendor_assets/img/icons/users1.svg')}}" alt="img">
</div>
</div>
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
<input type="password" name="password" class="pass-input" placeholder="Enter your password">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
<div class="form-login">
<label>Confirm Password</label>
<div class="pass-group">
<input type="password" name="password_confirmation" class="pass-input" placeholder="Confirm your password">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
<div class="form-login">
<button type="submit" class="btn btn-login">Sign Up</button>
</div>
</form>
<div class="signinform text-center">
<h4>Already a user? <a href="{{route('login')}}" class="hover-a">Sign In</a></h4>
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