<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>
    body {
        background: linear-gradient(to right, #000428, #570042, #000000);
        height: 100vh;
        margin: 0;
        background-size: cover;
    }

    .card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .form-label {
        color: white;
    }

    .error {
        color: blueviolet !important;
    }
    
</style>
@notifyCss
</head>

<body>
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 5">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif
    </div>
    
    <x-notify::notify />
