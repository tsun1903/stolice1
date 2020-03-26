<html>
    <head>
     <meta charset="utf-8">
    <link rel="stylesheet" href="styl.css">
        <title>Stolice nie Europejskie</title>
        </head>
        <body>
            <div id="gora">
               <h1> <a href="index.php">Stolica Japonii</a>
                <a href="index2.php">Stolica Autralii</a>
                   <a href="index3.php">Stolica USA</a></h1>
            <h1>Stolica USA </h1><br>
                <h3>Waszyngton</h3>
            </div>
    <div id="srodek">
            <p> Waszyngton – założona 16 lipca 1790 stolica Stanów Zjednoczonych.

            Miasto Waszyngton stanowiło pierwotnie odrębną jednostkę samorządową, znajdującą się na obszarze Terytorium Kolumbii. Dopiero uchwała Kongresu z 1871 zespoliła je z Terytorium, powołując do istnienia całość nazwaną Dystryktem Kolumbii. Dlatego też, choć według prawa zwie się „Dystrykt Kolumbii”, powszechnie znane jest jako „Waszyngton, D.C.”. Leży na północnym brzegu rzeki Potomak, graniczy ze stanami Wirginia (na południowym zachodzie) oraz Maryland (z pozostałych stron). Ma 599 657 stałych mieszkańców, jeżeli zaś uwzględnić dojeżdżających do pracy z sąsiednich osiedli, liczba ludzi przebywających w jego obrębie wzrasta w dni robocze do ponad miliona. Obszar Metropolitalny Waszyngtonu, którego Dystrykt Kolumbii jest częścią, liczy 5,3 miliona ludzi i stanowi siódmy pod względem wielkości obszar metropolitalny w kraju.</p>
            </div>
            <div id="galeria">
                <?php
 
                        $z = opendir('images2');
                            while ( $file = readdir( $z ) )
                            {
 
                            $parts = pathinfo( 'images2/' . $file );
                            if ( $parts['extension']  == 'jpg' ) // tylko gdy pliki maja rozszerzenie jpg..
                            {
 
	                           echo '<A target="_blank" href="images2/'.$file.'"><img width="300" height="300" src="images2/' . $file . '" /></a>';
 
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
