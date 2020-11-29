<?php
    session_start();
    
    $cards      = array();  //山札
    $checkcards = array();  //選んだトランプ２枚
    $mypoints;              //自分が取得した枚数
    $title      = "the Memory Game";

    if(!isset($_GET['reset'])){
        if(isset($_SESSION['cards']))        $cards    = $_SESSION['cards'];
    }
    
    if(isset($_POST['mycards'])){
        $cards = $_SESSION['cards'];
        $checkcards = $_POST['mycards'];
        $array_count = count($checkcards);

        $index1 = substr($checkcards[0], 0, 1);
        $onedigit1 = substr($checkcards[0], -1); 
        $twodigit1 = substr($checkcards[0], -2);
        if(is_numeric(substr($checkcards[0], 0, 2))){
            $front1 = substr($checkcards[0], 2);
        } else {
            $front1 = substr($checkcards[0], 1);
        }
    
        $index2 = substr($checkcards[1], 0, 1);
        $onedigit2 = substr($checkcards[1], -1); 
        $twodigit2 = substr($checkcards[1], -2); 
        if(is_numeric(substr($checkcards[1], 0, 2))){
            $front2 = substr($checkcards[1], 2);
        } else {
            $front2 = substr($checkcards[1], 1);
        }

        $next_turn = true;
    } elseif(isset($_GET['next'])) {
        $cards = $_SESSION['cards'];
        $next_turn = false;
    } else {
        $cards = init_cards();
        $next_turn = false;
    }

    // 選択したカードをチェックする
    if(isset($_POST['mycards'])) {
        // 選択したカードの枚数が２枚か確認する
        if($array_count == 2){
            if(is_numeric($twodigit1) && is_numeric($twodigit2)){
                if($twodigit1 == $twodigit2){
                    array_splice($cards, $index1, 1);
                    array_splice($cards, $index2, 1);
                    $message = "トランプは一致しました！";
                } else {
                    $message = "トランプは一致しませんでした！";
                }
            } elseif($onedigit1 == $onedigit2) {
                array_splice($cards, $index1, 1);
                array_splice($cards, $index2, 1);
                $message = "トランプは一致しました！";
            } else {
                $message = "トランプは一致しませんでした！";
            }
        } else {
            $message = "トランプは２枚だけ選んでください！";
            $next_turn = false;
        }
    }
        
    $_SESSION['cards'] = $cards;
    $mypoints = 52 - count($cards);
    
    //山札を用意する
    function init_cards(){
        $cards = array();
        $marks = array('spade', 'heart', 'diamond', 'club');
    
        foreach($marks as $mark){
            for($i=1;$i<=13;$i++){
                $cards[] = array(
                    'num' => $i,
                    'mark' => $mark
                );
            }
        }
        shuffle($cards);
        return $cards;
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title; ?></title>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../system/style.css">
    </head>
<body class="memorygame">
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
        echo "現在のポイントは" . $mypoints . "点です";
        if($next_turn === false){
        ?>
        <form method="post" name="cards_form" action="index.php">
            <?php
                foreach($cards as $index => $card){
                    
            ?>
                <input type="checkbox" name="mycards[]" value="<?php echo $index.$cards[$index]['mark'].$cards[$index]['num']; ?>" id="mycard<?php echo $index; ?>">
                <label for="mycard<?php echo $index; ?>">
                    <img src="../cards/backcard.png">
                </label>
            <?php
                }
            ?>        
            <br>
            <div class="commandbox">
                <div class="commandbuttan">
                    <ul>
                        <li><a href="#" onclick="document.cards_form.submit();">Check</a></li>
                        <li><a href="?reset">Reset</a></li>
                    </ul>
                </div>
            </div>
        </form>
        <?php
        } else {
        ?>
            <h3>あなたが選んだトランプ</h3>
            <img src="../cards/<?php echo $front1; ?>.png">
            <img src="../cards/<?php echo $front2; ?>.png">
            <br>
            <div class="commandbox">
                <div class="commandbuttan">
                    <ul>
                        <li><a href="?next">Next</a></li>
                        <li><a href="?reset">Reset</a></li>
                    </ul>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>