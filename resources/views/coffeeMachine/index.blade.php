@extends('coffeeMachine.layout')

@section('content')
<div>
    <h1>Kohviautomaat</h1>
    <hr class="hr-1">

    @if($count > 0)
        <ul class="list-group">
            
            @foreach($joogid as $jook)

                @if($jook->topsejuua > 0)
                    <h3>{{$jook->jooginimi}}</h3>

                    <li class="list-group-item d-flex justify-content-between align-items-center" id="vertical-align-item">
                        <!-- <a class="padding-part">Topse Pakis: {{$jook->topsepakis}}</a> -->
                        <a class="padding-part">Topse Juua: {{$jook->topsejuua}}</a>
                        <a class="btn btn-primary" href="{{route('coffeeMachine.decrement', $jook->id)}}">Joo ära 1 tops</a>
                    </li>
                    <div class="machine-item"></div>
                @endif

            @endforeach

        </ul>
    @else
        <div class="d-flex justify-content-center">
            <p>Jooke pole saadaval :(</p>
        </div> 
    @endif
</div>
@endsection