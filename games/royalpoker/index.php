<?php
    session_start();

    require 'poker_controller.php';

    $end_game = false;      //終局フラグ
    $cards   = array();     //山札
    $player  = array();     //プレイヤーの手札
    $opp     = array();     //対戦相手の手札
    $title   = "the Royal Poker";
    
    if(!isset($_GET['reset'])){
        if(isset($_SESSION['cards']))        $cards  = $_SESSION['cards'];
        if(isset($_SESSION['player']))       $player = $_SESSION['player'];
        if(isset($_SESSION['opponent']))     $opp    = $_SESSION['opponent'];
    }
    
    //ゲームの分岐条件
    if(isset($_SESSION['cards']) && !isset($_GET['reset'])){
        $cards = $_SESSION['cards'];
        if(isset($_POST['mycards'])){
            $changecards = $_POST['mycards'];
            $process = $_POST['process'];
            $process = $process - 1;
            if($process < 1) $end_game = true;
        } else {
            $end_game = true;
        }
    } else {
        $process = 2;           //カードのめくる回数

        $cards = init_cards();  //やま札を初期化
        //5枚ずつカードを配る
        $player[]    = array_shift($cards);
        $opp[]       = array_shift($cards);
        $player[]    = array_shift($cards);
        $opp[]       = array_shift($cards);
        $player[]    = array_shift($cards);
        $opp[]       = array_shift($cards);
        $player[]    = array_shift($cards);
        $opp[]       = array_shift($cards);
        $player[]    = array_shift($cards);
        $opp[]       = array_shift($cards);
    }

    // 選択したカードを交換する
    if(isset($_POST['mycards'])) {
        foreach($changecards as $change){
            unset($player[$change]);
            $player[]    = array_shift($cards);
        }
    }
    
    $_SESSION['cards']       = $cards;
    $_SESSION['player']      = $player;
    $_SESSION['opponent']    = $opp;

    if($end_game == true){
        $playeraward = judge($player);
        $oppaward = judge($opp);
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title; ?></title>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../system/style.css">
    </head>
<body>
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

        <form method="post" name="cards_form" action="index.php">
            <input type="hidden" name="process" value="<?php echo $process; ?>">
            <div class="yourside">
                <h3>Your Hand</h3>
                <?php
                    foreach($player as $index => $card){
                        if($end_game === false){
                    ?>
                        <input type="checkbox" name="mycards[]" value="<?php echo $index; ?>" id="mycard<?php echo $index; ?>">
                        <label for="mycard<?php echo $index; ?>">
                            <img src="../cards/<?php echo $card['suit'].$card['num']; ?>.png">
                        </label>
                    <?php
                        } else {
                    ?>
                        <img src="../cards/<?php echo $card['suit'].$card['num']; ?>.png">
                    <?php
                        }
                    ?>
                <?php
                    }
                ?>
                <br>
            </div>
            
            <hr>

            <?php
                if($end_game === true){
                    echo "<p>";
                    echo "Your Hand is <b>" . $playeraward . "</b>";
                    echo "<br>";
                    echo "Opponent's Hand is <b>" . $oppaward . "</b>";
                    echo "<br>";
                    echo "</p>";
                    echo "<hr>";
                }
            ?>
            
            <div class="oppside">
                <h3>Opponent's Hand</h3>
                    <?php
                    foreach($opp as $card){
                        if($end_game === false){
                            ?>
                            <img src="../cards/backcard.png">
                        <?php
                            } else {
                        ?>
                            <img src="../cards/<?php echo $card['suit'].$card['num']; ?>.png">
                        <?php
                            }
                        ?>
                    <?php
                        }
                    ?>
                <br>
            </div>
            
            <hr>
            
            <div class="commandbox">
                <div class="commandbuttan">
                    <ul>
                        <?php if($end_game === false):?>
                            <li><a href="#" onclick="document.cards_form.submit();">Change</a></li>
                            <li><a href="?stand">Stand</a></li>
                        <?php endif;?>
                        <li><a href="?reset">Reset</a></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</body>
</html>