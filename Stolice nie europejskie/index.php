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
                   <a href="index3.php">Stolica Brazylii</a></h1>
            <h1>Stolica Japoni</h1><br>
                <h3>Tokio</h3>
            </div>
    <div id="srodek">
            <p> Tokio – stolica i największe miasto Japonii, położone na południowo-wschodnim wybrzeżu Honsiu i zarazem największy obszar metropolitalny na świecie na poziomie 38 305 000 mieszkańców (stan na kwiecień 2018). Nazwa Tōkyō oznacza „Wschodnią Stolicę”. Do 1868 roku miasto nazywało się Edo.

            Tokio formalnie nie jest miastem, ale prefekturą metropolitalną od 1 lipca 1943. Zostało zniszczone przez trzęsienie ziemi w 1923, a także przez amerykańskie bombardowania w maju 1945 (podczas II wojny światowej). Było również organizatorem letnich igrzysk olimpijskich w 1964 i będzie ponownie w 2020.

            Znajdują się tutaj: Tokyo Skytree, Pałac Cesarski, zabytkowe świątynie buddyjskie, chramy shintō, muzea, obiekty kultury, parki. Tokio jest siedzibą jednej z głównych giełd świata i rekordowej liczby dużych firm.

            W 2018 Tokio odwiedziło 12,12 mln turystów z całego świata – było dziewiątym najczęściej odwiedzanym miastem na świecie.</p>
            </div>
            <div id="galeria">
                <?php
 
                        $z = opendir('images');
                            while ( $file = readdir( $z ) )
                            {
 
                            $parts = pathinfo( 'images/' . $file );
                            if ( $parts['extension']  == 'jpg' ) // tylko gdy pliki maja rozszerzenie jpg..
                            {
 
	                           echo '<A target="_blank" href="images/'.$file.'"><img width="300" height="300" src="images/' . $file . '" /></a>';
 
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
