<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('storage/g84-logo.png') }}"
          type="image/x-icon">

    <title>G84Media - Quay Phim - Chụp Ảnh uy tín tại hà nội</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="G84Media">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:title" content="Quay Phim - Chụp Ảnh uy tín tại hà nội">
    <meta property="og:url" content="https://g84media.com">
    <meta property="og:site_name" content="G84Media">
</head>
<body class="relative">
@include('components.header')

@yield('content')

@include('components.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>
