<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La Molisana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- foglio stile -->
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="{{ asset("img/marchio-sito-test.png") }}" alt="La Molisana">
                </div>
                <div class="menu">
                    <ul class="list-inline">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Prodotti</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <!-- patsa lunga -->
                <section class="typology">
                    <h2>LE LUNGHE</h2>
                    <div class="cards">
                        @foreach ($lunghe as $pasta) 
                            <div class="card">
                                <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                                <div class="card-text">
                                    <a href="#">{{ $pasta["titolo"] }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                <!-- /patsa lunga -->
                <!-- patsa corta -->
                <section class="typology">
                    <h2>LE CORTE</h2>
                    <div class="cards">
                        @foreach ($corte as $pasta) 
                            <div class="card">
                                <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                                <div class="card-text">
                                    <a href="#">{{ $pasta["titolo"] }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                <!-- /patsa corta -->
                <!-- patsa cortissima -->
                <section class="typology">
                    <h2>LE CORTISSIME</h2>
                    <div class="cards">
                        @foreach ($cortissime as $pasta) 
                            <div class="card">
                                <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                                <div class="card-text">
                                    <a href="#">{{ $pasta["titolo"] }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                <!-- /patsa cortissima -->
            </div>
        </main>

    </body>
</html>
