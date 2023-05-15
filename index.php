<?php
    @$theme=$_GET["theme"];
    if($theme=="light"|| $theme=="dark"){
        setcookie("theme",$theme,time()+3600)
    }
    $style=(empty(@$_COOKIE["theme"]))?("dark"):(@$_COOKIE["theme"]);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pyrolamacraft</title>
    <link rel="shortchut icon" href="https://surviecrafteur.github.io/image/tab.png"/>
    <link rel="stylesheet" href="https://surviecrafteur.github.io/style/back.css">
    <link rel="stylesheet" href="https://surviecrafteur.github.io/style/footer.css">
    <link rel="stylesheet" href="https://surviecrafteur.github.io/style/header.css">
    <link rel="stylesheet" href="https://surviecrafteur.github.io/style/nav.css">
    <link rel="stylesheet" href="https://surviecrafteur.github.io/style/back/<?php echo $style?>.css">
    <img id="back" src="https://surviecrafteur.github.io/image/back/<?php echo $style?>.png" alt="back">
</head>
<body>
    <header>
        <h1>pyrolamacraft</h1>
        <nav>
            <button id="now" onclick="location.href='https://surviecrafteur.github.io/fr/mods'">mods</button>
            <button id="navoff">wiki</button>
            <button id="nav"  onclick="location.href='https://discord.gg/UgKK68wT4Y'">discord</button>
            <button id="nav" onclick="location.href='https://surviecrafteur.github.io/fr/'">francais</button>
        </nav>
    </header>
    <section>
        <br>
        <u id="but">
            <button id="mods" onclick="location.href='https://surviecrafteur.github.io/fr/mods/plcorebag.html'">PLCorebag </button>
            <button id="modsoff">PLCundiscoveredworld </button>
        </u>
    </section>
    <section>sect2</section>
    <section>sect3
    </section>
    
    <footer>bas</footer>
</body>
</html>
