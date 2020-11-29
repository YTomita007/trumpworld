<?php
    session_start();
    
    $end_game   = false;        //終局フラグ
    $cards      = array();      //山札
    $player     = array();      //プレイヤーの手札
    $opp        = array();      //対戦相手の手札
    $title      = "Black Jack"; //ゲームタイトル
    
    if(!isset($_GET['reset'])){
        if(isset($_SESSION['cards']))        $cards  = $_SESSION['cards'];
        if(isset($_SESSION['player']))       $player = $_SESSION['player'];
        if(isset($_SESSION['opponent']))     $opp    = $_SESSION['opponent'];
    }
    
    if(isset($_SESSION['cards']) && !isset($_GET['reset'])){
        $cards = $_SESSION['cards'];
    } else {
        $cards = init_cards();
        //2枚ずつカードを配る
        $player[]    = array_shift($cards);
        $player[]    = array_shift($cards);
        $opp[]       = array_shift($cards);
        $opp[]       = array_shift($cards);
    }
    
    if(isset($_GET['hit'])) $player[] = array_shift($cards);
    
    //対戦相手の思考と終局判定
    if( isset($_GET['hit']) || isset($_GET['stand']) ){
        $threshold = 15;    //ヒットするしきい値
        if( sum_up_hands($opp) < $threshold ){
            $opp[] = array_shift($cards);
        } else if( isset($_GET['stand']) ){
            $end_game = true;
        }
    }
    
    //合計
    $player_total    = sum_up_hands($player);
    $opp_total       = sum_up_hands($opp);
    
    if($player_total > 21 || $opp_total > 21) $end_game = true;
    
    $_SESSION['cards']       = $cards;
    $_SESSION['player']      = $player;
    $_SESSION['opponent']    = $opp;
    
    //山札を用意する
    function init_cards(){
        $cards = array();
        $suits = array('spade', 'heart', 'diamond', 'club');
    
        foreach($suits as $suit){
            for($i=1;$i<=13;$i++){
                $cards[] = array(
                    'num' => $i,
                    'suit' => $suit
                );
            }
        }
        shuffle($cards);
        return $cards;
    }
    
    function sum_up_hands($hands){
        $ace = 0;
        $total = 0;
        foreach($hands as $card){
            $num = $card['num'];
            if($num > 10){
                $total += 10;
            } else if($num === 1){
                $ace++;
                $total += 1;
            } else {
                $total += $num;
            }
        }
        //Aの処理
        if(!empty($ace)){
            $add = 10 * floor( (21 - $total) / 10 );
            if($add > 0) $total += $add;
        }
        return $total;
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

        <div class="yourside">
            <h3>Your Hand</h3>
            <?php
                foreach($player as $card){
            ?>
            <img src="../cards/<?php echo $card['suit'].$card['num']; ?>.png">
            <?php
                }
            ?>
            <br>
            <h3>Total
                <?php
                    echo $player_total;
                    if($player_total > 21){
                        echo ' Burst';
                    } else if($end_game === true && $player_total > $opp_total){
                        echo ' Win';
                    }
                ?>
            </h3>
        </div>
        
        <hr>
        
        <div class="oppside">
            <h3>Opponent's Hand</h3>
            <?php
                foreach($opp as $card){
            ?>
                <img src="../cards/<?php echo $card['suit'].$card['num']; ?>.png">
            <?php
                }
            ?>
            <br>
            <h3>Total
                <?php
                    echo $opp_total;
                    if($opp_total > 21){
                        echo ' Burst';
                    } else if($end_game === true && $opp_total > $player_total){
                        echo ' Win';
                    }
                ?>
            </h3>
        </div>
        
        <hr>
        
        <div class="commandbox">
            <div class="commandbuttan">
                <ul>
                    <?php if($end_game === false):?>
                        <li><a href="?hit">Hit</a></li>
                        <li><a href="?stand">Stand</a></li>
                    <?php endif;?>
                    <li><a href="?reset">Reset</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>