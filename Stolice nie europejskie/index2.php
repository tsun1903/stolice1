<html>
    <head>
     <meta charset="utf-8">
    <link rel="stylesheet" href="styl.css">
        <title>Stolice nie Europejskie</title>
        </head>
        <body>
            <div id="gora">
               <h1> <a href="index.php">Stolica Japonii</a>
                <a href="index2.php">Stolica Australii</a>
                   <a href="index3.php">Stolica Brazylii</a></h1>
            <h1>Stolica Australi </h1><br>
                <h3>Sydney</h3>
            </div>
    <div id="srodek">
            <p>Sydney – największe miasto Australii i Oceanii z liczbą ludności wynoszącą ponad 5,2 mln mieszkańców, także stolica stanu Nowa Południowa Walia. Założone w 1788 roku, Sydney jest znaczącym centrum finansowym, handlowym, transportowym, kulturalnym i turystycznym, mając status metropolii o znaczeniu globalnym. Metropolia jest także dużym węzłem komunikacyjnym z największym międzynarodowym lotniskiem w Australii, które obsłużyło prawie 42 milionów pasażerów w 2016 roku, i rozbudowaną siecią drogową i kolejową. Położone jest na wschodnim wybrzeżu nad Oceanem Spokojnym.

            Sydney od lat znajduje się w pierwszej dziesiątce miast na świecie w zakresie jakości życia[9]. Sydney skupia wiele zagranicznych banków i korporacji międzynarodowych, a samo miasto jest promowane jako jeden z największych hubów finansowych w regionie Azji i Pacyfiku. Znajdują się tu trzy obiekty z listy światowego dziedzictwa UNESCO.</p>
            </div>
            <div id="galeria">
                <?php
 
                        $z = opendir('images1');
                            while ( $file = readdir( $z ) )
                            {
 
                            $parts = pathinfo( 'images1/' . $file );
                            if ( $parts['extension']  == 'jpg' ) // tylko gdy pliki maja rozszerzenie jpg..
                            {
 
	                           echo '<A target="_blank" href="images1/'.$file.'"><img width="300" height="300" src="images1/' . $file . '" /></a>';
 
                                }
 
                            }
                        closedir($z);
 
                ?>
            </div>
            
            <div id="dol">
                <p>Stronę wykonał: Jakub Goliasz</p>
            </div>
            </body>

</html>
