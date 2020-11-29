<?php
    session_start();
    
    require 'sevenrows_controller.php';

    $spades     = array();     //スペード行
    $clubs      = array();     //クラブ行
    $diamonds   = array();     //ダイヤモンド行
    $hearts     = array();     //ハート行
    $player     = array();     //プレイヤーの手札
    $opp1       = array();     //対戦相手１の手札
    $opp2       = array();     //対戦相手２の手札
    $opp3       = array();     //対戦相手３の手札
    $pause      = false;       //プレーヤーが間違えたときに有効にすることでコンピューターを思考させない制御
    $title      = "Seven Rows";//ゲームタイトル
    
    if(!isset($_GET['reset'])){
        if(isset($_SESSION['spades']))      $spades     = $_SESSION['spades'];
        if(isset($_SESSION['hearts']))      $hearts     = $_SESSION['hearts'];
        if(isset($_SESSION['diamonds']))    $diamonds   = $_SESSION['diamonds'];
        if(isset($_SESSION['clubs']))       $clubs      = $_SESSION['clubs'];
        if(isset($_SESSION['player']))      $player     = $_SESSION['player'];
        if(isset($_SESSION['opp1']))        $opp1       = $_SESSION['opp1'];
        if(isset($_SESSION['opp2']))        $opp2       = $_SESSION['opp2'];
        if(isset($_SESSION['opp3']))        $opp3       = $_SESSION['opp3'];
    }

    //ゲームの分岐条件
    if(isset($_POST['deploycard']) || isset($_GET['pass'])){
        $deploycard = $_POST['deploycard'];
        list($player, $spades, $hearts, $diamonds, $clubs, $message) = deploy($player, $deploycard, $spades, $hearts, $diamonds, $clubs);
        list($opp1, $spades, $hearts, $diamonds, $clubs, $message) = opponent($opp1, $spades, $hearts, $diamonds, $clubs);
        list($opp2, $spades, $hearts, $diamonds, $clubs, $message) = opponent($opp2, $spades, $hearts, $diamonds, $clubs);
        list($opp3, $spades, $hearts, $diamonds, $clubs, $message) = opponent($opp3, $spades, $hearts, $diamonds, $clubs);
    } else {
        // list($player, $spades, $hearts, $diamonds, $clubs) = selfinitialize();
        list($player, $opp1, $opp2, $opp3, $spades, $hearts, $diamonds, $clubs) = initialize();
    }

    $_SESSION['spades']     = $spades;
    $_SESSION['hearts']     = $hearts;
    $_SESSION['diamonds']   = $diamonds;
    $_SESSION['clubs']      = $clubs;
    $_SESSION['player']     = $player;
    $_SESSION['opp1']       = $opp1;
    $_SESSION['opp2']       = $opp2;
    $_SESSION['opp3']       = $opp3;
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title; ?></title>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../system/style.css">
    </head>
<body class="sevenrows">
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

        <?php
        if(isset($message)){
            echo "<h3>" . $message . "</h3>";
        }
        ?>

        <table>
            <tbody>
                <tr>
                <?php
                    foreach($spades as $card){
                ?>
                <td>
                    <img src="../cards/<?php echo $card['mark'].$card['num']; ?>.png">
                </td>
                <?php
                    }
                ?>
                <tr>
                <?php
                    foreach($hearts as $card){
                ?>
                <td>
                    <img src="../cards/<?php echo $card['mark'].$card['num']; ?>.png">
                </td>
                <?php
                    }
                ?>
                <tr>
                <?php
                    foreach($diamonds as $card){
                ?>
                <td>
                    <img src="../cards/<?php echo $card['mark'].$card['num']; ?>.png">
                </td>
                <?php
                    }
                ?>
                <tr>
                <?php
                    foreach($clubs as $card){
                ?>
                <td>
                    <img src="../cards/<?php echo $card['mark'].$card['num']; ?>.png">
                </td>
                <?php
                    }
                ?>
            </tbody>
        </table>
        
        <hr>

        <form method="post" name="cards_form" action="index.php">
            <div class="yourside">
                <h3>Your Cards</h3>
                <?php
                    foreach($player as $index => $card){
                    ?>
                        <input type="radio" name="deploycard" value="<?php echo $index."_".$player[$index]['num'].$player[$index]['mark']; ?>" id="mycard<?php echo $index; ?>">
                        <label for="mycard<?php echo $index; ?>">
                            <img src="../cards/<?php echo $card['mark'].$card['num']; ?>.png">
                        </label>
                    <?php
                    }
                ?>
                <br>
            </div>
            <div class="commandbox">
                <div class="commandbuttan">
                    <ul>
                        <li><a href="#" onclick="document.cards_form.submit();">Deploy</a></li>
                        <li><a href="?pass">Pass</a></li>
                        <li><a href="?reset">Reset</a></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</body>
</html>