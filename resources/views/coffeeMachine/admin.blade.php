@extends('coffeeMachine.layout')

@section('content')
<div>
    <h1>Kohviautomaat Haldusleht</h1>
    <hr class="hr-1">

    <ul class="list-group">
        
        @foreach($joogid as $jook)

            <h3>{{$jook->jooginimi}}</h3>

            <li class="list-group-item d-flex justify-content-between align-items-center" id="vertical-align-item">
                <a class="padding-part">Topse Pakis: {{$jook->topsepakis}}</a>
                <a class="padding-part">Topse Juua: {{$jook->topsejuua}}</a>
                @if( ($jook->topsejuua) <= ($jook->topsepakis) )
                    <a class="btn btn-primary" href="{{route('coffeeMachine.increment', $jook->id)}}">Täida {{$jook->topsepakis}} topsi</a>
                @else
                    <a class="btn btn-success" href="#">Korras</a>
                @endif
            </li>
            <div class="machine-item"></div>

        @endforeach

    </ul>

</div>
@endsection