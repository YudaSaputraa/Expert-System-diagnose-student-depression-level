@extends('main')
@section('main_section')
{{-- Navbar --}}
<header>
    <div class="page-heading plain">
        <br>
        <br>
        <h1 class="entry-title" style="text-align: center;">Diagnosa Tingkat Depresi</h1>
        <br><br>
    </div>
    {{-- @include('components.cl_navbar') --}}
</header>
{{-- isi --}}
<main>
    @yield('cl_content')
</main>
@endsection