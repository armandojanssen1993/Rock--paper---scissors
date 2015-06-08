<!DOCTYPE html>
<html>
<head lang="en">
    <link type="text/css" rel="stylesheet" href="../css/index.css">
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
    <title>Rock, paper & scissors</title>
</head>
<body>

<header>

</header>

<div id="main">
    <!-- START BLOCK : RPS -->

    <h1>Rock, Paper & Scissors</h1>
    <form action="../php/RPS.php" method="post">
        <div id="buttons">
            <button value="rock" name="submit" class="rock"><img src="../img/rock.png"></button>
            <button value="paper" name="submit" class="paper"><img src="../img/paper.png"></button>
            <button value="scissors" name="submit" class="scissor"><img src="../img/scissors.png"></button>
        </div>
    </form>

    <!-- END BLOCK : RPS -->

    <!-- START BLOCK : RPS FILLED -->

    <h1>Rock, Paper & Scissors</h1>
    <aside>
        <form action="../php/RPS.php" method="post">
        <p> Player: {WIN}<br />
            Computer: {LOSE}
        </p>

        <button value="reset" id="reset" name="reset">reset</button>
        </form>
    </aside>
    <form action="../php/RPS.php" method="post">
        <div id="buttons">
            <button value="rock" name="submit" class="rock"><img src="../img/rock.png"></button>
            <button value="paper" name="submit" class="paper"><img src="../img/paper.png"></button>
            <button value="scissors" name="submit" class="scissor"><img src="../img/scissors.png"></button>
        </div>
    </form>

    <div>
        <h1>You chose {ITEM}
        <br />Computer chose {COMPITEM}
        <br />{RESULT}</h1>
    </div>

    <!-- END BLOCK : RPS FILLED -->
</div>

<footer>

</footer>

</body>
</html>
