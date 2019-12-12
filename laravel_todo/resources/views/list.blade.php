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

@foreach($list as $value)
{!! $value['name'] !!}
@if ($value['status'] ==0)
    chưa làm 
@elseif ($value['status'] ==1)
   đã hoàn thành
@else
   không thực hiện
@endif
<br>
@endforeach

</body>
</html>