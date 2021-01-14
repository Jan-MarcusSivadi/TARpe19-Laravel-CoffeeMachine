@extends('coffeeMachines.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Machine</title>
</head>
<body>
    <h1>Get a hot Cup of Coffee</h1>

    @if($count > 0)
        <ul class="list-group">

            @if($count > 0 && $count < 2)
                <p>You have {{$count}} Coffee Machine!</p>
            @elseif($count > 1)
                <p>You have {{$count}} Coffee Machines!</p>
            @endif
            
            @for($i = 0; $i < $count; $i++)
                <li class="list-group-item d-flex justify-content-between align-items-center" id="vertical-align-item">
                    <a>Coffee Machine {{$i+1}}</a>
                    

                    <!-- <a>Joogi Nimi: {{$machines[$i]->jooginimi}}</a>
                    <a>Topse Pakis: {{$machines[$i]->topsepakis}}</a>
                    <a>Topse Juua: {{$machines[$i]->topsepakis}}</a> -->
                </li>
            @endfor
        </ul>
    @else
        <p>You don't have any Coffee Machines :(</p>
    @endif
</body>
</html>
@endsection