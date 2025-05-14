<!DOCTYPE html>
<html lang="en" data-controller="html-load" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <title>
        Sign in to your account                    - Laravel
            </title>
    <meta name="csrf_token" content="oazudtbWb2i87CWsv4sr2EYsLrq1tuzgh75L9PaC" id="csrf_token">
    <meta name="auth" content="" id="auth">
            <link rel="stylesheet" type="text/css" href="/vendor/orchid/css/orchid.css?id=6a2782d99a810b7fa4b31e4ded12c80d"  data-turbo-track="reload" >
    
        <meta name="robots" content="noindex"/>
    <meta name="google" content="notranslate">
    <link
          href="http://127.0.0.1:8000/vendor/orchid/favicon.svg"
          sizes="any"
          type="image/svg+xml"
          id="favicon"
          rel="icon"
    >

    <!-- For Safari on iOS -->
    <meta name="theme-color" content="#21252a">

    <meta name="view-transition" content="same-origin">
    <meta name="turbo-root" content="/admin">
    <meta name="turbo-refresh-method" content="replace">
    <meta name="turbo-refresh-scroll" content="preserve">
    <meta name="turbo-prefetch" content="true">
    <meta name="dashboard-prefix" content="/admin">

    
            <script src="/vendor/orchid/js/manifest.js?id=a0cf0beb2ef26ed536c04092e6558f2a" data-turbo-track="reload" type="text/javascript"></script>
            <script src="/vendor/orchid/js/vendor.js?id=ebad221ec97b49e74a1477c98c2b0551" data-turbo-track="reload" type="text/javascript"></script>
            <script src="/vendor/orchid/js/orchid.js?id=d8a579cee083c41de9c761eb3f81fe32" data-turbo-track="reload" type="text/javascript"></script>
    
    
    
    
    </head>

<body class="page-platform-login" data-controller="pull-to-refresh">

<div class="container-fluid" data-controller="" >

    <div class="row justify-content-center d-md-flex h-100">
        
        <div class="col-xxl col-xl-9 col-12 mx-auto">
            
    <div class="container-md">
        <div class="form-signin h-full min-vh-100 d-flex flex-column justify-content-center">

            <a class="d-flex justify-content-center mb-4 p-0 px-sm-5" href="/admin">
                <div class="h2 d-flex align-items-center">
    
    <p class="my-0 ">
        Laravel
    </p>
</div>
            </a>

            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xxl-5 px-md-5">

                    <div class="bg-white p-4 p-sm-5 rounded shadow-sm">
                            <h1 class="h4 text-body-emphasis mb-4">Sign in to your account</h1>

    <form class="m-t-md"
          role="form"
          method="POST"
          data-controller="form"
          data-form-need-prevents-form-abandonment-value="false"
          data-action="form#submit"
          action="http://127.0.0.1:8000/admin/login">
        <input type="hidden" name="_token" value="oazudtbWb2i87CWsv4sr2EYsLrq1tuzgh75L9PaC" autocomplete="off">
                <div class="mb-3">

    <label class="form-label">
        Email address
    </label>

    <div class="form-group">
    
    <div data-controller="input"
         data-input-mask=""
    >
        <input class="form-control" name="email" type="email" required="required" tabindex="1" autofocus="autofocus" autocomplete="email" inputmode="email" placeholder="Enter your email" id="field-email-e5eaddd0a4af8bd8">
    </div>

    
    </div>


</div>


<div class="mb-3">
    <label class="form-label w-100">
        Password
    </label>

    <div class="form-group">
    
    <div data-controller="password"
         class="input-icon"
    >
        <input type="password" class="form-control" name="password" required="required" autocomplete="current-password" tabindex="2" placeholder="Enter your password" id="field-password-92da64de1aa8ee08" data-password-target="password">
        <div class="input-icon-addon cursor" data-action="click->password#change">

            <span data-password-target="iconShow">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="small me-2" viewBox="0 0 16 16" path="bs.eye" id="field-password-92da64de1aa8ee08" role="img" componentName="orchid-icon">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"></path>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
</svg>

            </span>

            <span data-password-target="iconLock" class="none">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="small me-2" viewBox="0 0 16 16" path="bs.eye-slash" id="field-password-92da64de1aa8ee08" role="img" componentName="orchid-icon">
  <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"></path>
  <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"></path>
  <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"></path>
</svg>

            </span>
        </div>
    </div>

    
    </div>


</div>

<div class="row align-items-center">
    <div class="col-md-6 col-xs-12">
        <label class="form-check">
            <input type="hidden" name="remember">
            <input type="checkbox" name="remember" value="true"
                   class="form-check-input" checked>
            <span class="form-check-label"> Remember Me</span>
        </label>
    </div>
    <div class="col-md-6 col-xs-12">
        <button id="button-login" type="submit" class="btn btn-default btn-block" tabindex="3">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="small me-2" viewBox="0 0 16 16" path="bs.box-arrow-in-right" role="img" componentName="orchid-icon">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"></path>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"></path>
</svg>

            Login
        </button>
    </div>
</div>
    </form>
                    </div>
                </div>
            </div>
</body>
</html>
