<!-- resources/views/layouts/home.blade.php-->

{{-- Kế thừa file master.blade.php--}}
@extends('layouts.master')

{{-- Truyền dữ liệu vào đúng vị trí của @yield('title') trong file master.blade.php --}}
@section('title')
    Trang chủ
@endsection

{{-- Truyền dữ liệu vào đúng vị trí của @yield('content') trong file master.blade.php --}}
@section('content')
    Họ và tên: {{ $name }}<br> 
Năm sinh:{{ $year}}<br> 
Trường học:{{ $school}}<br> 
Quê quán:{{ $dchi }}<br>
Giới thiệu bản thân:{!! $gthieu !!}<br> 
Mục tiêu nghề nghiệp:{{ $target }}<br>
@endsection

</body>
</html>