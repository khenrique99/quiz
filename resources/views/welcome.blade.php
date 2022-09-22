<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quiz - Perguntas Dificeis</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/cssHome.css" />
    </head>
    <body>

    <div class="divHome">
        <h1>QUIZ - Perguntas dificeis</h1>
        <p>Um quiz que não existem perguntas certas ou erradas, você vai se deparar com perguntas que irão ser respondidas com "coração" e/ou consciência de cada um!
            <br/>
           Esse jogo tem intúito de trazer um relatório de análises de decisões baseadas na idades (são fatores fictícios que não promovemos a discriminação de qualqueis tipos)!
        </p>
        <div class="imgHome"></div>

        @guest
            <h1>Faça o login ou se cadastre abaixo</h1>
        @endguest
    </div>

    @auth
        @if (Auth::user()->tipo_usuario == 99)
            <div class="divAdminitrator">
                <div>
                    <a href="/perguntas/cadastrar">CADASTRAR PERGUNTAS</a>
                </div>
                <div>
                    <a href="/perguntas/visualizar">VISUALIZAR PERGUNTAS</a>
                </div>
                <div>
                    <a href="#">GERENCIAR USUARIOS</a>
                </div>
                <div>
                    <a href="#">RELATÓRIOS</a>
                </div>
                <div>
                    <a href="#">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">SAIR DA CONTA</a>
                        </form>
                    </a>
                </div>
            </div>
            <div class="divAdminitratorGeral">
                <h1>
                    Seja Bem-Vindo(a)
                    <span>{{Auth::user()->name}}</span>
                </h1>
                <div>
                    <p>Atualmente temos
                        @foreach ($geralUser as $geralUser)
                            <span>{{$geralUser->total}}
                                @if ($geralUser->total <=1)
                                    Usuário Administrador
                                @else
                                    Usuários Administradores
                                @endif
                            </span>
                        @endforeach
                        e
                        @foreach ($geralAdmin as $geralAdmin)
                            <span>{{$geralAdmin->total}}
                                @if ($geralAdmin->total <=1)
                                    Usuário Comum
                                @else
                                    Usuários Comuns
                                @endif
                            </span>
                        @endforeach
                    </p>
                    <p>
                        @foreach ($geralPergunta as $geralPergunta)
                            <span>{{$geralPergunta->total}}</span>
                        @endforeach
                        @if ($geralPergunta->total <= 1)
                            Pergunta cadastrada no sistema
                        @else
                            Perguntas cadastradas no sistema
                        @endif
                    </p>
                </div>
            </div>
        @endif
    @endauth

    @guest
    <div class="divGridAutenticacao">
        <div class="divLogin">
            <h1>Acesse sua conta</h1>
            <x-jet-authentication-card>
                <x-slot name="logo"></x-slot>

                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <p>E-mail</p>
                    </div>
                    <div>
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div>
                        <p>Senha</p>
                    </div>
                    <div class="mt-4">
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">Manter-me conectado</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                        @endif

                    </div>

                    <div>
                        <x-jet-button class="ml-4">Entrar</x-jet-button>
                    </div>
                </form>
            </x-jet-authentication-card>
        </div>

        <div class="divRegister">
            <h1>Cadastre uma conta</h1>
            <x-jet-authentication-card>
                <x-slot name="logo"></x-slot>
                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <p>Seu nome</p>
                    </div>

                    <div>
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" required/>
                    </div>

                    <div>
                        <p>Sua idade</p>
                    </div>

                    <div>
                        <input type="number" name="idade" id="idade" required/>
                    </div>

                    <div>
                        <p>E-mail</p>
                    </div>
                    <div class="mt-4">
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" required/>
                    </div>

                    <div>
                        <p>Senha</p>
                    </div>
                    <div class="mt-4">
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required/>
                    </div>

                    <div>
                        <p>Confirme a senha</p>
                    </div>
                    <div class="mt-4">
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required/>
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif

                    <div>
                        <x-jet-button class="ml-4">Cadastrar</x-jet-button>
                    </div>
                    
                </form>
            </x-jet-authentication-card>
        </div>
    </div>
    @endguest

    <div class="divRodape">
        <h1>Pair programming (2022) <span>Developed by:</span></h1>
        <h3>Guilherme Abel - Senior Front End <br> Kelvin Henrique - Senior Back End</h3>
    </div>

    </body>
</html>
