{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        .btn:hover {
            background: linear-gradient(to right, #cc751e, #8fd61e);
            /* Ubah warna gradasi saat hover */
        }
    </style>
    @vite('resources/sass/app.scss')
</head>

<body> --}}
@extends('layouts.app')

@section('content')

<style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgb(255, 94, 0);
    }
</style>
    <div class="m-0">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ Vite::asset('resources/images/5.png') }}" class="vw-100 vh-100" alt="..."
                        >
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ Vite::asset('resources/images/6.png') }}" class="w-100 h-100" alt="..."
                        >
                </div>
            </div>

        </div>

    </div>
@endsection

@vite('resources/js/app.js')
</body>

</html>
