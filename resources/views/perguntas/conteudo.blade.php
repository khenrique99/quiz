@extends ('layouts.geral')

@section('title', 'QUIZ - PERGUNTA X')

@section('titulo')
    <a href="/"><ion-icon name="backspace" class="ion-padrao"></ion-icon>Voltar</a>
        <br>
    Home <ion-icon name="arrow-redo" class="ion-personar"></ion-icon> Módulo
    @foreach ($perguntas as $pergunta)
        {{$pergunta->grupo}}
    @endforeach
     - Todas as perguntas
@endsection

@section('geral')
    <div class="gerenciamentoModulos">
        <h1>Gerenciamento do módulo</h1>
        <ul>
            <li>Total de perguntas:
                @foreach ($totalpergunta as $totalpergunta)
                    <span>{{$totalpergunta->total}}</span>
                @endforeach
            </li>
            <li>% Perguntas respondidas: <span>X</span></li>
            <li>% Perguntas não respondidas: <span>X</span></li>
        </ul>
    </div>
    <div class="gridModulos">
        @foreach ($total as $total)
            <a href="/perguntas/especifica/{{$total->id}}">
                <div class="divModulos">
                    <h1>({{$total->grupo}}.{{$total->id}})</h1>
                    <p>{{$total->titulo}}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection