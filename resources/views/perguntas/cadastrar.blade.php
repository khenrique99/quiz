@extends ('layouts.geral')

@section('title', 'QUIZ - CADASTRAR PERGUNTA')

@section('titulo')
    <a href="/"><ion-icon name="backspace" class="ion-padrao"></ion-icon>Voltar</a>
        <br>
    Home <ion-icon name="arrow-redo" class="ion-personar"></ion-icon> Cadastrar Perguntas QUIZ
@endsection

@section('geral')
    <div class="divCadastrar">
        <h1 class="tituloPadrao">Cadastre agora uma nova história</h1>
        <div class="gridFormCadastrar">
            <form action="#">
                <label for="grupo">Grupo referente</label>
                <select name="grupo" id="grupo">
                    <option value="Selecione">Selecione</option>
                    <option value="1">Pedreiro</option>
                    <option value="2">Engenheiro IA</option>
                    <option value="3">Médico</option>
                </select>
                <label for="titulo">Titulo da História</label>
                <input type="text" name="titulo" id="titulo">
                <label for="pergunta">História da Pergunta</label>
                <textarea name="pergunta" id="pergunta" cols="30" rows="10"></textarea>
                <label for="image">Imagem da História</label>
                <input type="file" name="image" id="image">
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </form>
        </div>
    </div>
@endsection