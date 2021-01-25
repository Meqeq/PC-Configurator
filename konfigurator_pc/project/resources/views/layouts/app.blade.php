<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <style>
        body {
            min-height: 100vh;
            background-color: #935d8c;
            background: linear-gradient(45deg, #e37682 15%, #5f4d93 85%);
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4">
        @if(Request::is("/"))
            <div class="logo py-8 text-center text-white">
                <div class="py-4 text-5xl">
                    <i class="fas fa-robot"></i>
                </div>
                
        
                <div class="py-4 text-5xl">
                    PC Configurator
                </div>
            </div>
        @else
            <div class="py-4 text-5xl py-2 text-center text-white">
                PC Configurator
            </div>
        @endif

        <main class="bg-white rounded shadow">
            <nav class="bg-gray-200 p-4 rounded text-center">
                <ul class="flex flex-wrap">
                    <li class="w-1/2 h-10 lg:w-1/6">
                        <a class="leading-10 p-2 lg:px-8 hover:bg-gray-100 rounded" href="/" >Home</a>
                    </li>
                    <li class="w-1/2 h-10 lg:w-1/6">
                        <a class="leading-10 p-2 lg:px-8 hover:bg-gray-100 rounded" href="/config">
                            Browse configs
                        </a>
                    </li>
                    <li class="w-1/2 h-10 lg:w-1/6">
                        <a class="leading-10 p-2 lg:px-8 hover:bg-gray-100 rounded" href="{{route('config.create')}}">
                            Create config
                        </a>
                    </li>
                    <li class="w-1/2 h-10 lg:w-1/6">
                        <a class="leading-10 p-2 lg:px-8 hover:bg-gray-100 rounded" href="{{route('componentsIndex')}}">
                            Components
                        </a>
                    </li>
                    @if(Auth::check()) 
                        <li class="w-1/2 h-10 lg:w-1/6">
                            <a class="leading-10 p-2 lg:px-8 hover:bg-gray-100 rounded" href={{route('user.show', ['user'=>Auth::user()])}}>
                                Profile
                            </a>
                        </li>
                        <li class="w-1/2 h-10 lg:w-1/6">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a 
                                    class="leading-10 p-2 lg:px-8 hover:bg-gray-100 rounded" href="{{route('logout')}}"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                >Logout</a>
                            </form>
                        </li>
                    @else
                        <li class="w-1/2 h-10 lg:w-1/6">
                            <a class="leading-10 p-2 lg:px-8 hover:bg-gray-100 rounded" href="{{route('login')}}">
                                Login
                            </a>
                        </li>
                        <li class="w-1/2 h-10 lg:w-1/6">
                            <a class="leading-10 p-2 lg:px-8 hover:bg-gray-100 rounded" href="{{route('register')}}">
                                Register
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
            <div class="content">
                <header class="p-4 text-center bg-gray-100 relative">
                    @yield("header")
                </header>
                <div class="p-2">
                    @yield("body")
                </div>
            </div>
        </main>
        <footer class="p-8 text-white">
            <h3 class="text-2xl">PC Configurator</h3>
            Made by:
            <ul>
                <li>BC</li>
                <li>DJ</li>
                <li>MJ</li>
                <li>KW</li>
            </ul>
        </footer>
    </div>
</body>
</html>