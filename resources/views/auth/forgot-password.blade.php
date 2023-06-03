@include('vendor.layouts.includes.auth_head')
<body class="account-page">

<div class="main-wrapper">
<div class="account-content">
<div class="login-wrapper">
<div class="login-content">
<div class="login-userset ">
<div class="login-logo">
<img src="{{asset('vendor_assets/img/logo.png')}}" alt="img">
</div>
<div class="login-userheading">
<h3>Forgot password?</h3>
<h4>Don’t warry! it happens. Please enter the address <br>
associated with your account.</h4>
</div>
<form action="{{route('password.email')}}" method="post">@csrf
    <div class="form-login">
        <label>Email</label>
        <div class="form-addons">
        <input name="email" type="text" placeholder="Enter your email address">
        <img src="{{asset('vendor_assets/img/icons/mail.svg')}}" alt="img">
        </div>
        </div>
        <div class="form-login">
        <button class="btn btn-login" type="submit">Submit</button>
        </div>
</form>

</div>
</div>
<div class="login-img">
<img src="{{asset('vendor_assets/img/login.jpg')}}" alt="img">
</div>
</div>
</div>
</div>

@include('vendor.layouts.includes.auth_script')