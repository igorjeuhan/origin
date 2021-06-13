@extends('admin.layouts.principal')

@section('conteudo-principal')

    <h1>{{$titulo}}</h1>
    <h3>{{$subtitulo}}</h3>
@endsection

@section('cards')

    <div class="card card1">
        <h4>{{$t_card1}}</h4>
        <ul>
            @foreach ($itens_card1 as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
        <button>Detalhes</button>
    </div>
    <div class="card card2">
        <h4>{{$t_card2}}</h4>
        <ul>
            @foreach ($itens_card2 as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
        <button>Detalhes</button>
    </div>

@endsection
