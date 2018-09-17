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
        <header class="header">
            <h1 class="heading"><a href="index.php" class="color-primary">Išmanusis riedis</a></h1>
            <nav>
                <ul>
                    <li><a href="index.php?module=order&action=create" title="Užsakyti" class="color-secondary">Užsisakyti</a></li>
                    <li><a href="index.php?module=order&action=list" title="Užsakymai" class="color-secondary">Užsakymai</a></li>
                </ul>
            </nav>
        </header>
        <div>
            <?php
            if (file_exists($actionFile)) {
                include $actionFile;
            } else {
                echo "<p class='description'>Dauguma riedžių panašūs savo išore, tačiau vidinių dalių pasirinkimas yra labai gausus. Mūsų tikslas - pateikti patį kokybiškiausią riedį. Mūsų specialistai kruopščiai atrinko gaminių kokybę, mūsų riedžiai yra komplektuojami tik pagal mūsų parinktas geriausias dalis ir jų gamintojus. Kainų skirtumas - tai kokybės skirtumas, todėl neapsigaukite matydami, atrodo, tokį pat gaminį, tačiau skirtinga kaina, vis dėlto - tai elektrinio transporto priemonė. Dedame didžiausias pastangas į kokybiško produkto paieškas ir atrankas, todėl didžiuojamės sulaukdami teigiamų atsiliepimų iš savo klientų ir gausybės rekomendacijų.</p>";
                ?>
                <input type="button" value="Užsisakyti" class="button"
                       accesskey=""accept=""onClick="document.location.href = 'index.php?module=order&action=create'" />
                       <?php
                   }
                   ?>
        </div>
    </body>
</html>