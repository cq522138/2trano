<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{ route('plus') }}">
    {{ csrf_field() }}
    <input type="text" name="number1">
    <input type="text" name="number2">
    <br>

    {{--<a href="{{route('plus')}}">cong</a>--}}
    <input type="submit" name="sum" value="+">
    <input type="submit" name="minus" value="-">
    <input type="submit" name="multiply" value="*">
    <input type="submit" name="split" value="/">
    @if(isset($number3))
    {{ $number3 }}
    @endif


</form>
</body>
</html>