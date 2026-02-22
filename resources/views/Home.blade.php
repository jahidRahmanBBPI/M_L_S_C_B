{{-- {{ $result }} --}}
{{-- @if ($result == 100)
    <h1>Result is hundred</h1>
@elseif ($result == 1000)
    <h1>Result is Thousand</h1>
@else 
    <h1>Result is not in our range</h1>
@endif --}}

{{-- switch case --}}
{{-- @switch($result)
    @case(100)
        <h1>Result is Handred</h1>
        @break
    @case(1000)
        <h1>Result is Thousand</h1>
    @break
    @default
        <h1>Result is not in our range</h1>
@endswitch --}}

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        {{-- for loop --}}
        {{-- @for ($i = 0; $i<=100; $i=$i+1)
            <li>{{ $i }}</li>
        @endfor --}}

        @foreach ($users as $user)
            <li>User name is {{ $user['name'] }} & live in {{ $user['city'] }} city </li>
        @endforeach
    </ul>

</body>
</html>