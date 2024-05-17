<!doctype html>
<html lang="pt-br">
    <head>
        @include('components.head')
    </head>

    <body>
       @include('components.nav')
       @include('components.carousel')
       @yield('conteudo')

       @include('components.footer')
    </body>
    @include('components.scripts')
</html>
