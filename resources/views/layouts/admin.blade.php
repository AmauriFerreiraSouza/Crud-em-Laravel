<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') - LARAVEL 1</title>
    </head>
    <body>
        <header>
            <h1>HEADER</h1>
        </header>
        <hr/>
        <section>
            @yield('content')
        </section>
        <hr/>
        <footer>
            <h1>FOOTER</h1>
        </footer>
    </body>
</html>