<html>
    	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex">
		<title>Automobilių nuomos IS</title>
		<link rel="stylesheet" type="text/css" href="scripts/datetimepicker/jquery.datetimepicker.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/main.css" media="screen" />
		<script type="text/javascript" src="scripts/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="scripts/datetimepicker/jquery.datetimepicker.full.min.js"></script>
		<script type="text/javascript" src="scripts/main.js"></script>
	</head>
    <body>
        <div class="container" style="width:80%;">
            <div id="body" style="width:100%">
                <div id="header">
                    <h3 id="slogan"><a href="index.php">Išmanusis riedis</a></h3>
                </div>
                <div id="content">
                    <nav class="navbar navbar-light" style="background-color: #e3f2fd; margin-bottom: 0px;">
                        <div id="topMenu">
                            <ul class="float-left">
                                <li><a href="index.php?module=order&action=create" title="Užsakyti"<?php
                                    if ($module == 'order') {
                                        echo 'class="active"';
                                    }
                                    ?>>Užsisakyti</a></li>
                                <li><a href="index.php?module=order&action=list" title="Užsakymai"<?php
                                    if ($module == 'order') {
                                        echo 'class="active"';
                                    }
                                    ?>>Užsakymai</a></li>
                            </ul>			
                        </div>
                    </nav>
                    <div id="contentMain">                                    
                        <?php
                        if (file_exists($actionFile)) {
                            include $actionFile;
                        } else {
                            echo "<h3><center>Dauguma riedžių panašūs savo išore, tačiau vidinių dalių pasirinkimas yra labai gausus. Mūsų tikslas - pateikti patį kokybiškiausią riedį. Mūsų specialistai kruopščiai atrinko gaminių kokybę, mūsų riedžiai yra komplektuojami tik pagal mūsų parinktas geriausias dalis ir jų gamintojus. Kainų skirtumas - tai kokybės skirtumas, todėl neapsigaukite matydami, atrodo, tokį pat gaminį, tačiau skirtinga kaina, vis dėlto - tai elektrinio transporto priemonė. Dedame didžiausias pastangas į kokybiško produkto paieškas ir atrankas, todėl didžiuojamės sulaukdami teigiamų atsiliepimų iš savo klientų ir gausybės rekomendacijų.</center></h3>";
                            ?>
                            <input type="button" value="Užsisakyti" class="submit button" id="order" align="center"
                                   accesskey=""accept=""onClick="document.location.href = 'index.php?module=order&action=create'" />
                                   <?php
                               }
                               ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>