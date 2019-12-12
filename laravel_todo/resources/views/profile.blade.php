<!-- resources/views/hello2.blade.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hello cac ban</title>
    <link rel="stylesheet" href="">
</head>
<body>
{{--<p>Tên tôi là: {!! $content !!} </p>--}}
{{-- <p>Tôi sinh năm {{ $year }}</p> --}}
Họ và tên: {{ $name }}<br> 
Năm sinh:{{ $year}}<br> 
Trường học:{{ $school}}<br> 
Quê quán:{{ $dchi }}<br>
Giới thiệu bản thân:{!! $gthieu !!}<br> 
Mục tiêu nghề nghiệp:{{ $target }}<br>


</body>
</html>