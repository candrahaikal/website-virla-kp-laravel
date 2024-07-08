<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.head')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <style>
/* Table Styles */
.table th, .table td {
    text-align: center;
    vertical-align: middle;
}

.table img {
    max-width: 16rem; /* Sesuaikan ukuran gambar jika perlu */
    height: auto;
}

.table .btn {
    margin: 0 2px;
}

/* Action Button Styles */
.action-buttons {
  /* padding-top: 10px; */
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
}

.action-buttons a, .action-buttons form {
    margin-right: 5px;
}

    </style>
</head>

<body>
    @include('pages.admin.navbar')


    @yield('content')

    {{-- @include('layouts.partials.footer') --}}
    
    @include('layouts.partials.footer-script')
</body>

</html>
