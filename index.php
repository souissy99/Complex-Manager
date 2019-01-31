<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>ComplexManager</title>
</head>
<body>
<div class="formu">
    <h2>Complex Manager</h2>
    <form method="POST">
        <div class="tata">
            <ul class="champ">
                <li class="r">
                    <input type="text" name="ree" placeholder="Réelle">
                </li>
                <li class="i">
                    <input type="text" name="ima" placeholder="Imaginaire"><label for="i"> i</label>
                </li>
                <li class="aff">
                    <input type="submit" value="Afficher" class="aff">
                </li>
        </div>
    </form>
    <?php
    require_once('function.php');
    require_once('function2.php');
    if (!empty($_POST['ree']) && !empty($_POST['ima'])) {

        $ree = $_POST['ree'];
        $ima = $_POST['ima'];
        echo '<div class="txt">';
        verif_nbr($ree, $ima);
        conj($ree, $ima);
        mod($ree, $ima);
        arg($ree, $ima);
        trig($ree, $ima);
        inv($ree, $ima);
        expo($ree, $ima);
        echo '</div>';
    } else {
        echo '<div class="txt">';
        echo "Les champs sont vides";
        echo '</div>';
    }
    ?>
    <canvas id="myCanvas" width="500" height="500">
        Your browser does not support the HTML5 canvas tag.
    </canvas>
    <p>
        <script>
            var c = document.getElementById("myCanvas");
            var ctx = c.getContext("2d");
            ctx.moveTo(250, 0);
            ctx.lineTo(250, 500);
            ctx.moveTo(0, 250);
            ctx.lineTo(500, 250);
            ctx.font = "12px Arial";
            ctx.strokeText("-10", 255, 495);
            ctx.strokeText("10", 255, 12);
            ctx.strokeText("10", 482, 245);
            ctx.strokeText("-10", 3, 245);
            var ree = '<?php echo $ree ?>';
            var ima = '<?php echo $ima ?>';
            var cordX = 250;
            var cordY = 250;
            var corya = 25 * ree;
            var corxa = 25 * ima;
            cordX = cordX - corxa;
            cordY = cordY + corya;
            ctx.strokeText("x", cordY, cordX);
            ctx.stroke();
        </script>
</div>
<body>
</body>
</html>