@extends ('layouts.geral')

@section('title', 'QUIZ - PERGUNTA X')

@section('titulo')
    <a href="javascript:history.back()"><ion-icon name="backspace" class="ion-padrao"></ion-icon>Voltar</a>
    <br>
    <ion-icon name="checkmark-done" class="ion-personar"></ion-icon>
    @foreach ($pergunta as $pergunta)
        <span>{{$pergunta->grupo}}.{{$pergunta->id}} | {{$pergunta->titulo}}</span>
    @endforeach
@endsection

@section('geral')

    <div class="divPergunta">
        <img src="../image/perguntas/{{$pergunta->image}}" alt="image" />
        <h1>{{$pergunta->pergunta}}</h1>
        <div class="divClear"></div>
        <form action="">
            <input type="submit" value="{{$pergunta->resposta1}}">
            <br>
            <input type="submit" value="{{$pergunta->resposta2}}">
        </form>
    </div>

@endsection