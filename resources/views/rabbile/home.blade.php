<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap') }}">
    <title>Document</title>
</head>
<body>
    {{-- <button class="btn btn-success">button</button>
    <a href="{{ url('ostad.app') }}"></a> --}}
    @if ($mark_value > 80)
        <h1>A+ Yes</h1>
    @else
        <h1>Not</h1>
    @endif
</body>
</html>