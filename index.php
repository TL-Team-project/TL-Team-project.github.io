<?include "header.php"?>
    <body>
        <!-- Barra di navigazione -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">

                <!-- header della navbar -->
                <div class="navbar-header">
                    <!-- Pulsante per device mobile -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <!-- Lineete-->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Logo o il nome del sito -->
                    <a class="navbar-brand" href="index.html"> <img src="img/logo2.jpg"> </a>
                </div>

                <!--Inizia la parte che viene fata collassare su device mobile -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        <!-- Primo link dropdown-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Regione <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Storia</a></li>
                                <li><a href="#">Dialetto</a></li>
                                <li><a href="#">Clima</a></li>
                            </ul>
                        </li>
                        <!-- Secondo Link dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Dove <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Venezia</a></li>
                                <li><a href="#">Padova</a></li>
                                <li><a href="#">Treviso</a></li>
                                <li><a href="#">Verona</a></li>
                                <li><a href="#">Vicenza</a></li>
                                <li><a href="#">Belluno</a></li>
                                <li><a href="#">Rovigo</a></li>
                            </ul>
                        </li>

                        <!-- Terzo Link dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Cosa visitare <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Musei</a></li>
                                <li><a href="#">Piazze</a></li>
                                <li><a href="#">Chiese</a></li>
                                <li><a href="#">Edifici storici</a></li>
                                <li><a href="#">Sagre</a></li>
                                <li><a href="#">Fiere</a></li>
                                <li><a href="#">Mostre</a></li>
                            </ul>
                        </li>

                        <!-- Quarto Link dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Che turista sei? <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Viaggiatore solitario</a></li>
                                <li><a href="#">Con la famiglia</a></li>
                                <li><a href="#">Studente</a></li>
                            </ul>
                        </li>
                        <!-- Link semplice-->

                    </ul>

                    <!-- La zona a destra -->
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <!-- campo compilabile-->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Ricerca nel sito">
                            </div>
                            <!-- Pulsante di ricerca -->
                            <button type="submit" class="btn btn-default">Search</button>
                        </form>
                    </ul>
                    <!--selettori lingua -->
                    <div class="nav navbar-form navbar-right">
                        <a href="#"><img src="img/it.png"></a>
                        <a href="#"><img src="img/en.png"></a>
                    </div>
                    <!-- selettori -->
                </div>
            </div>
        </nav>

        <!-- Carousel-->
        <div id="myCarousel" class="carousel slide">
            <!-- Indicatori di posizione -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- La classe carousel-inner si occupa di tutto ciò che è dentro il carousel -->
            <div class="carousel-inner">

                <!-- Prima slide --->
                <div class="item active">
                    <!-- inseriamo l'immagine e il testo alternativo -->
                    <img src="http://placehold.it/2000x400/008800/ffffff" alt="Welcome">
                    <!-- Inseriamo un container per inserire il testo e le discalia -->
                    <div class="container">
                        <!-- Inseriamo la didascalia --->
                        <div class="carousel-caption">
                            <!-- Testo -->
                            <h1><em>La città di Venezia</em> </h1>
                        </div>
                    </div>
                </div>

                <!-- Seconda slide -->
                <div class="item">
                    <!-- Inseriamo l'immagine -->
                    <img src="http://placehold.it/2000x400/448800/aaaaaa.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1> <em>La città di Padova</em> </h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pulsanti -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div> <!-- /.carousel -->


        <!-- Corpo della pagina -->
        <div class="container">
            <!-- Header della pagina -->
            <div class="page-header">
                <h1>
                    Benvenuti in Veneto, mille motivi per visitarla
                </h1>
            </div>
            <!-- Inseriamo una nuova riga -->
            <div class="row">
                <div class="col-sm-7">
                    <p>
                        <strong>Venezia</strong> dolor sit amet, consectetur adipiscing elit. Aenean nec metus lacu
                        egetlorem convallis, mollis felis faucibus, tempor eros. Aliquam dignissim commodo magna,
                        in orci semper eu. Sed sit amet nibh vel eros mollis semper. Etiam magna est, mattis ut
                        dignissim hendrerit, placerat ac tortor. <strong>Padova</strong> nisl. Aliquam non consectetur
                        augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pulvinar consequat
                        in orci semper eu. Sed sit amet nibh vel eros <strong>Treviso</strong>. Etiam magna est,
                        dignissim hendrerit, placerat ac tortor. Aenean at fermentum nisl. Aliquam non consectetur
                        loremin orci semper eu. Sed sit amet nibh vel eros <strong>Treviso</strong>. Etiam magna est,
                        dignissim hendrerit, placerat ac tortor. Aenean at fermentum nisl. Aliquam non consectetur
                        lorem
                    </p>
                </div>
                <div class="col-sm-5">

                    <h3>Prossimi eventi</h3>

                    <div class "col-sm-12"><a href="#">Evento1</a></div>
                    <div class "col-sm-12"><a href="#">Evento2</a></div>
                    <div class "col-sm-12"><a href="#">Evento3</a></div>

                </div>
            </div>
            <!--Inseriamo una riga -->
            <div class="row">
                <!--Inseriamo una colonna tipo sm-7 -->
                <div class="col-sm-7">

                    <p>
                        <strong>Arena</strong> dolor sit amet, consectetur adipiscing elit. Aenean nec metus lacus.
                        egetlorem convallis, mollis felis faucibus, tempor eros. Aliquam dignissim commodo magna,
                        in orci semper eu. Sed sit amet nibh vel eros <strong>Treviso</strong>. Etiam magna est,
                        dignissim hendrerit, placerat ac tortor. Aenean at fermentum nisl. Aliquam non consectetur
                        in orci semper eu. Sed sit amet nibh vel eros <strong>Treviso</strong>. Etiam magna est,
                        dignissim hendrerit, placerat ac tortor. Aenean at fermentum nisl. Aliquam non consectetur
                        lorem
                        in orci semper eu. Sed sit amet nibh vel eros <strong>Treviso</strong>. Etiam magna est,
                        dignissim hendrerit, placerat ac tortor. Aenean at fermentum nisl. Aliquam non consectetur
                        loremin orci semper eu. Sed sit amet nibh vel eros <strong>Treviso</strong>. Etiam magna est,
                        dignissim hendrerit, placerat ac tortor. Aenean at fermentum nisl. Aliquam non consectetur
                        lorem
                    </p>
                </div>
                <!--Inseriamo un altra colonna tipo sm-5 -->
                <div class="col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel panel-heading"><strong>Area di login per utenti registrati</strong></div>
                        <form class="navbar-form navbar-left" role="button">
                            <!-- campo compilabile-->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your account">
                            </div>
                            <!-- Pulsante di ricerca -->
                            <button type="submit" class="btn btn-default">Entra</button>
                        </form>
                        <br><br><br>
                        <p>Password dimenticata: <a href="#">Clicca qui</a></p>
                        <p><strong>Oppure</strong> <a href="#">Registrati</a></p>
                    </div>
                </div>
            </div>
            <!-- Inseriamo una altra riga, il container ce già -->
            <div class="row">
                <!-- Inseriamo prima colonna tipo sm-7 -->
                <div class="col-sm-7">
                    <p><strong>Seguici su:</strong> <a href="#">Facebook</a> <a href="#">Twitter</a></p>
                    <p><strong>Lascia la tua e-mail per iscriversi alla NewsLetter</strong></p>
                    <form class="navbar-form navbar-left" role="button">
                        <!-- campo compilabile-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="your e-mail">
                        </div>
                        <!-- Pulsante di ricerca -->
                        <button type="submit" class="btn btn-default">Invia</button>
                    </form>
                </div>

                <!--Inseriamo la seconda colonna tipo sm-5 -->
                <div class="col-sm-5 hidden-xs">
                    <!-- Inseriamo un panello, cioe un riquadro dotato di titolo ci sono di diversi colori:
                        default, primary, success, info, warning, danger -->
                    <div class="panel panel-primary">
                        <!-- Inseriamo il titolo del panello -->
                        <div class="panel-heading">
                            <h3 class="panel-title">Tag cloud</h3>
                        </div>
                        <!-- Inseriamo il body del panello-->
                        <div class="panel-body">
                            <h1><a href="#"> Venezia </a></h1><h2><a href="#">Verona</a></h2>
                            <h1><a href="#">Padova</a></h1> <h2><a href="#">Chiesa si Sant'Antonio</a></h2>
                            <h5><a href="#">Arena</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form class="navbar-form navbar-right" role="button">
                        <span>Area riservata agli amministratori</span>
                        <!-- campo compilabile-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="account admin">
                        </div>
                        <!-- Pulsante di ricerca -->
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="riga col-sm-12"> <!--helper per tornare all'inizio -->
            <div class="container">
                <div class="pull-right">
                    <a href="#">Top</a>
                </div>

            </div>
        </div>  <!--fine hleper-->
<?include "footer.php"?>