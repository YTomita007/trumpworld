<?php
    session_start();

    ini_set( 'display_errors', 1 );

    require 'controllers/klondike_controller.php';

    list(
        $cards_f, $cards_r, $cards_fcnt, $spades, $hearts, $diamonds, $clubs,
        $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7,
        $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7,
        $title, $deployflag
    ) = checkin();

    //ゲームの分岐条件
    if(isset($_POST['command'])){
        if($_POST['command'] == "pick"){
            $deployflag = true;
            $holdcard = $_POST['pickcard'];
        } elseif($_POST['command'] == "move"){
            $deployflag = false;
            $holdcard = $_POST['holdcard'];
            $pickcard = $_POST['pickcard'];
            list(
                $cards_f, $cards_r, $spades, $hearts, $diamonds, $clubs, 
                $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7, 
                $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            ) = carddeploy(
                $holdcard, $pickcard, $cards_f, $cards_r, $spades, $hearts, $diamonds, $clubs, 
                $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7,
                $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            );
        }
    } elseif(isset($_GET['release'])) {
        $deployflag = false;
    } elseif(isset($_GET['pass'])) {
        list($cards_f, $cards_r) = deckcontroller($cards_fcnt, $cards_f, $cards_r);
    } else {
        list(
            $cards_f, $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7, 
            $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7) = initialize();
    }

    list(
        $cards_fcnt, $cards_rcnt, $spadescnt, $heartscnt, $diamondscnt, $clubscnt, 
        $inicol1cnt, $inicol2cnt, $inicol3cnt, $inicol4cnt, $inicol5cnt, $inicol6cnt, $inicol7cnt, 
        $mycol1cnt, $mycol2cnt, $mycol3cnt, $mycol4cnt, $mycol5cnt, $mycol6cnt, $mycol7cnt
    ) = allcounts(
        $cards_f, $cards_r, $spades, $hearts, $diamonds, $clubs,
        $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7,
        $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
    );

    $_SESSION['cards_f']    = $cards_f;
    $_SESSION['cards_r']    = $cards_r;
    $_SESSION['spades']     = $spades;
    $_SESSION['hearts']     = $hearts;
    $_SESSION['diamonds']   = $diamonds;
    $_SESSION['clubs']      = $clubs;
    $_SESSION['inicol1']    = $inicol1;
    $_SESSION['inicol2']    = $inicol2;
    $_SESSION['inicol3']    = $inicol3;
    $_SESSION['inicol4']    = $inicol4;
    $_SESSION['inicol5']    = $inicol5;
    $_SESSION['inicol6']    = $inicol6;
    $_SESSION['inicol7']    = $inicol7;
    $_SESSION['mycol1']     = $mycol1;
    $_SESSION['mycol2']     = $mycol2;
    $_SESSION['mycol3']     = $mycol3;
    $_SESSION['mycol4']     = $mycol4;
    $_SESSION['mycol5']     = $mycol5;
    $_SESSION['mycol6']     = $mycol6;
    $_SESSION['mycol7']     = $mycol7;
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title; ?></title>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../system/style.css">
    </head>
<body class="klondike">
    <div align="center">
        <h1><?php echo $title; ?></h1>

        <hr>

		<div class="leftside">
            <div class="commandbuttan">
                <ul>
                    <li><a href="../../index.php">Back</a></li>
                </ul>
            </div>
        </div>

        <br><br><br><br><br>

        <?php
        if(isset($message)){
            echo "<h3>" . $message . "</h3>";
        }
        ?>

        <form method="post" name="cards_form" action="index.php">
            <ul>
                <li>
                <?php
                    if (0 < $cards_fcnt){
                        if($deployflag == false){
                            echo "<input type='radio' name='pickcard' value='deckcard" . $cards_f[0]['num'].$cards_f[0]['mark'] . "' id='deckcard'>";
                            echo "<label for='deckcard'>";
                            echo "<img src='../cards/" . $cards_f[0]['mark'].$cards_f[0]['num'] . ".png'>";
                            echo "</label>";
                        } else {
                            echo "<img src='../cards/" . $cards_f[0]['mark'].$cards_f[0]['num'] . ".png'>";
                        }
                    } else {
                        echo "<img src='../cards/00again.png'>";
                    }
                ?>
                </li>
                <li>
                <?php
                    if (0 < $cards_rcnt){
                        echo "<img src='../cards/" . $cards_r[$cards_rcnt - 1]['mark'].$cards_r[$cards_rcnt - 1]['num'] . ".png'>";
                    } else {
                        echo "<img src='../cards/0empty1.png'>";
                    }
                ?>
                </li>
                <li>
                </li>
                <li>
                    <?php
                    include('./views/deck_spades.php');
                    ?>
                </li>
                <li>
                    <?php
                    include('./views/deck_hearts.php');
                    ?>
                </li>
                <li>
                    <?php
                    include('./views/deck_diamonds.php');
                    ?>
                </li>
                <li>
                    <?php
                    include('./views/deck_clubs.php');
                    ?>
                </li>
            </ul>
            
            <hr>

            <ul>
                <li>
                    <div class="cardscolumns">
                        <?php
                        include('./views/column1.php');
                        ?>
                    </div>
                </li>
                <li>
                    <div class="cardscolumns">
                        <?php
                        include('./views/column2.php');
                        ?>
                    </div>
                </li>
                <li>
                    <div class="cardscolumns">
                        <?php
                        include('./views/column3.php');
                        ?>
                    </div>
                </li>
                <li>
                    <div class="cardscolumns">
                        <?php
                        include('./views/column4.php');
                        ?>
                    </div>
                </li>
                <li>
                    <div class="cardscolumns">
                        <?php
                        include('./views/column5.php');
                        ?>
                    </div>
                </li>
                <li>
                    <div class="cardscolumns">
                        <?php
                        include('./views/column6.php');
                        ?>
                    </div>
                </li>
                <li>
                    <div class="cardscolumns">
                        <?php
                        include('./views/column7.php');
                        ?>
                    </div>
                </li>
            </ul>
            <div class="commandbox">
                <div class="commandbuttan">
                    <ul>
                        <?php
                            if($deployflag == true){
                        ?>
                        <input type="hidden" name="command" value="move" >
                        <input type="hidden" name="holdcard" value="<?php echo $holdcard; ?>" >
                        <li><a href="#" onclick="document.cards_form.submit();">Move</a></li>
                        <li><a href="?release">Release</a></li>
                        <?php
                            } else {
                        ?>
                        <input type="hidden" name="command" value="pick" >
                        <li><a href="#" onclick="document.cards_form.submit();">Pick</a></li>
                        <?php
                            }
                        ?>
                        <li><a href="?pass">Pass</a></li>
                        <li><a href="?reset">Reset</a></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</body>
</html>