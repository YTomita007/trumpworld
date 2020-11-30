<?php

    require 'deck_controller.php';
    // require 'inicol1_controller.php';
    // require 'inicol2_controller.php';
    // require 'inicol3_controller.php';
    // require 'inicol4_controller.php';
    // require 'inicol5_controller.php';
    // require 'inicol6_controller.php';
    // require 'inicol7_controller.php';
    require '01spades_controller.php';
    require '02hearts_controller.php';
    require '03diamonds_controller.php';
    require '04clubs_controller.php';
    require 'mycol1_controller.php';
    require 'mycol2_controller.php';
    require 'mycol3_controller.php';
    require 'mycol4_controller.php';
    require 'mycol5_controller.php';
    require 'mycol6_controller.php';
    require 'mycol7_controller.php';

    //プログラムの初期設定
    function checkin(){

        $cards_f    = array();     //山札表
        $cards_r    = array();     //山札裏
        $spades     = array();     //スペード組札
        $clubs      = array();     //クラブ組札
        $diamonds   = array();     //ダイヤモンド組札
        $hearts     = array();     //ハート組札
        $inicol1    = array();     //初期場札１
        $inicol2    = array();     //初期場札２
        $inicol3    = array();     //初期場札３
        $inicol4    = array();     //初期場札４
        $inicol5    = array();     //初期場札５
        $inicol6    = array();     //初期場札６
        $inicol7    = array();     //初期場札７
        $mycol1     = array();     //手札場札１
        $mycol2     = array();     //手札場札２
        $mycol3     = array();     //手札場札３
        $mycol4     = array();     //手札場札４
        $mycol5     = array();     //手札場札５
        $mycol6     = array();     //手札場札６
        $mycol7     = array();     //手札場札７
        $title      = "Klondike";   //ゲームタイトル
        $deployflag = false;
                
        if(!isset($_GET['reset'])){
            if(isset($_SESSION['cards_f']))     $cards_f        = $_SESSION['cards_f'];
            if(isset($_SESSION['cards_r']))     $cards_r        = $_SESSION['cards_r'];
            if(isset($_SESSION['spades']))      $spades         = $_SESSION['spades'];
            if(isset($_SESSION['hearts']))      $hearts         = $_SESSION['hearts'];
            if(isset($_SESSION['diamonds']))    $diamonds       = $_SESSION['diamonds'];
            if(isset($_SESSION['clubs']))       $clubs          = $_SESSION['clubs'];
            if(isset($_SESSION['inicol1']))     $inicol1        = $_SESSION['inicol1'];
            if(isset($_SESSION['inicol2']))     $inicol2        = $_SESSION['inicol2'];
            if(isset($_SESSION['inicol3']))     $inicol3        = $_SESSION['inicol3'];
            if(isset($_SESSION['inicol4']))     $inicol4        = $_SESSION['inicol4'];
            if(isset($_SESSION['inicol5']))     $inicol5        = $_SESSION['inicol5'];
            if(isset($_SESSION['inicol6']))     $inicol6        = $_SESSION['inicol6'];
            if(isset($_SESSION['inicol7']))     $inicol7        = $_SESSION['inicol7'];
            if(isset($_SESSION['mycol1']))      $mycol1         = $_SESSION['mycol1'];
            if(isset($_SESSION['mycol2']))      $mycol2         = $_SESSION['mycol2'];
            if(isset($_SESSION['mycol3']))      $mycol3         = $_SESSION['mycol3'];
            if(isset($_SESSION['mycol4']))      $mycol4         = $_SESSION['mycol4'];
            if(isset($_SESSION['mycol5']))      $mycol5         = $_SESSION['mycol5'];
            if(isset($_SESSION['mycol6']))      $mycol6         = $_SESSION['mycol6'];
            if(isset($_SESSION['mycol7']))      $mycol7         = $_SESSION['mycol7'];
        }

        $cards_fcnt = count($cards_f);

        return array(
            $cards_f, $cards_r, $cards_fcnt, $spades, $hearts, $diamonds, $clubs,
            $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7,
            $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7,
            $title, $deployflag
        );
    }

    //初期設定
    function initialize(){
        $cards = array();
        $marks = array('spade', 'heart', 'diamond', 'club');
    
        foreach($marks as $mark){
            for($i=1;$i<=13;$i++){
                $cards[] = array(
                    'mark' => $mark,
                    'num' => $i,
                );
            }
        }
        shuffle($cards);

        for($i=0;$i<52;$i++){
            if(0<=$i && $i <1){
                $inicol1[] = array_shift($cards);
            } elseif (1<=$i && $i <3){
                $inicol2[] = array_shift($cards);
            } elseif (3<=$i && $i <6){
                $inicol3[] = array_shift($cards);
            } elseif(6<=$i && $i <10){
                $inicol4[] = array_shift($cards);
            } elseif (10<=$i && $i <15){
                $inicol5[] = array_shift($cards);
            } elseif (15<=$i && $i <21){
                $inicol6[] = array_shift($cards);
            } elseif(21<=$i && $i <28){
                $inicol7[] = array_shift($cards);
            }
        }

        $mycol1[] = array_pop($inicol1);
        $mycol2[] = array_pop($inicol2);
        $mycol3[] = array_pop($inicol3);
        $mycol4[] = array_pop($inicol4);
        $mycol5[] = array_pop($inicol5);
        $mycol6[] = array_pop($inicol6);
        $mycol7[] = array_pop($inicol7);
    
        return array(
            $cards, $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7, 
            $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
        );
    }

    function allcounts(
                $cards_f, $cards_r, $spades, $hearts, $diamonds, $clubs,
                $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7,
                $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
        ){

        $cards_fcnt     = count($cards_f);
        $cards_rcnt     = count($cards_r);
        $spadescnt      = count($spades);
        $heartscnt      = count($hearts);
        $diamondscnt    = count($diamonds);
        $clubscnt       = count($clubs);
        $inicol1cnt     = count($inicol1);
        $inicol2cnt     = count($inicol2);
        $inicol3cnt     = count($inicol3);
        $inicol4cnt     = count($inicol4);
        $inicol5cnt     = count($inicol5);
        $inicol6cnt     = count($inicol6);
        $inicol7cnt     = count($inicol7);
        $mycol1cnt      = count($mycol1);
        $mycol2cnt      = count($mycol2);
        $mycol3cnt      = count($mycol3);
        $mycol4cnt      = count($mycol4);
        $mycol5cnt      = count($mycol5);
        $mycol6cnt      = count($mycol6);
        $mycol7cnt      = count($mycol7);

        return array(
            $cards_fcnt, $cards_rcnt, $spadescnt, $heartscnt, $diamondscnt, $clubscnt, 
            $inicol1cnt, $inicol2cnt, $inicol3cnt, $inicol4cnt, $inicol5cnt, $inicol6cnt, $inicol7cnt, 
            $mycol1cnt, $mycol2cnt, $mycol3cnt, $mycol4cnt, $mycol5cnt, $mycol6cnt, $mycol7cnt
        );
    }

    //passの操作について動きを振り分ける
    function deckcontroller($cards_fcnt, $cards_f, $cards_r){
        if(0 < $cards_fcnt){
            list($cards_f, $cards_r) = deckpass($cards_f, $cards_r);
        } else {
            list($cards_f, $cards_r) = deckturn($cards_f, $cards_r);
        }

        return array($cards_f, $cards_r);
    }

    //選択したカードを分解する
    function checkcard($checkcard){
        $position = substr($checkcard, 0, 8);
        if(strpos($position, "mycol") !== false){
            if(is_numeric(substr($checkcard, 8, 2))){
                $index = substr($checkcard, 8, 2);
                if(is_numeric(substr($checkcard, 12, 2))){
                    $thenum = substr($checkcard, 12, 2);
                    $themark = substr($checkcard, 14);
                } else {
                    $thenum = substr($checkcard, 12, 1);
                    $themark = substr($checkcard, 13);
                }
            } else {
                $index = substr($checkcard, 8, 1);
                if(is_numeric(substr($checkcard, 11, 2))){
                    $thenum = substr($checkcard, 11, 2);
                    $themark = substr($checkcard, 13);
                } else {
                    $thenum = substr($checkcard, 11, 1);
                    $themark = substr($checkcard, 12);
                }
            }

        } else {
            if(is_numeric(substr($checkcard, 8, 2))){
                $thenum = substr($checkcard, 8, 2);
                $themark = substr($checkcard, 10);
            } else {
                $thenum = substr($checkcard, 8, 1);
                $themark = substr($checkcard, 9);
            }

            $index = null;
        }

        $thecard = array(
            'mark' => $themark,
            'num' => $thenum,
            );

        return array($position, $index, $thenum, $themark, $thecard);
    }

    //トランプを配置できるかチェックする
    function carddeploy(
                $_holdcard, $_pickcard, $cards_f, $cards_r, $spades, $hearts, $diamonds, $clubs, 
                $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7,
                $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            ){

        list($holdcardposition, $holdcardindex, $holdnum, $holdmark, $holdcard) = checkcard($_holdcard);
        list($pickcardposition, $pickcardindex, $picknum, $pickmark, $pickcard) = checkcard($_pickcard);

        // echo $holdcardposition . "<br>" . $holdcardindex . "<br>" . $holdnum . "<br>" . $holdmark . "<br>";
        // echo $pickcardposition . "<br>" . $pickcardindex . "<br>" . $picknum . "<br>" . $pickmark . "<br>";

        switch($holdcardposition){
            case 'deckcard':
                list(
                    $cards_f, $cards_r, $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = deckshift(
                    $cards_f, $cards_r, $holdcardposition, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                );
                break;
            // case 'col1card':
            //     list(
            //         $inicol1, $spades, $hearts, $diamonds, $clubs, 
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     ) = inicol1shift(
            //         $holdcardposition, $holdnum, $holdmark, $holdcard, 
            //         $pickcardposition, $picknum, $pickmark, $pickcard, 
            //         $spades, $hearts, $diamonds, $clubs, $inicol1,
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     );
            //     break;
            // case 'col2card':
            //     list(
            //         $inicol2, $spades, $hearts, $diamonds, $clubs, 
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     ) = inicol2shift(
            //         $holdcardposition, $holdnum, $holdmark, $holdcard, 
            //         $pickcardposition, $picknum, $pickmark, $pickcard, 
            //         $spades, $hearts, $diamonds, $clubs, $inicol2,
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     );
            //     break;
            // case 'col3card':
            //     list(
            //         $inicol3, $spades, $hearts, $diamonds, $clubs, 
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     ) = inicol3shift(
            //         $holdcardposition, $holdnum, $holdmark, $holdcard, 
            //         $pickcardposition, $picknum, $pickmark, $pickcard, 
            //         $spades, $hearts, $diamonds, $clubs, $inicol3,
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     );
            //     break;
            // case 'col4card':
            //     list(
            //         $inicol4, $spades, $hearts, $diamonds, $clubs, 
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     ) = inicol4shift(
            //         $holdcardposition, $holdnum, $holdmark, $holdcard, 
            //         $pickcardposition, $picknum, $pickmark, $pickcard, 
            //         $spades, $hearts, $diamonds, $clubs, $inicol4,
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     );
            //     break;
            // case 'col5card':
            //     list(
            //         $inicol5, $spades, $hearts, $diamonds, $clubs, 
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     ) = inicol5shift(
            //         $holdcardposition, $holdnum, $holdmark, $holdcard, 
            //         $pickcardposition, $picknum, $pickmark, $pickcard, 
            //         $spades, $hearts, $diamonds, $clubs, $inicol5,
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     );
            //     break;
            // case 'col6card':
            //     list(
            //         $inicol6, $spades, $hearts, $diamonds, $clubs, 
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     ) = inicol6shift(
            //         $holdcardposition, $holdnum, $holdmark, $holdcard, 
            //         $pickcardposition, $picknum, $pickmark, $pickcard, 
            //         $spades, $hearts, $diamonds, $clubs, $inicol6,
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     );
            //     break;
            // case 'col7card':
            //     list(
            //         $inicol7, $spades, $hearts, $diamonds, $clubs, 
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     ) = inicol7shift(
            //         $holdcardposition, $holdnum, $holdmark, $holdcard, 
            //         $pickcardposition, $picknum, $pickmark, $pickcard, 
            //         $spades, $hearts, $diamonds, $clubs, $inicol7,
            //         $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
            //     );
            //     break;
            case '01spades':
                list(
                    $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = spadesshift(
                    $holdcardposition, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs,
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                );
                break;
            case '02hearts':
                list(
                    $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = heartsshift(
                    $holdcardposition, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs,
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                );
                break;
            case 'diamonds':
                list(
                    $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = diamondsshift(
                    $holdcardposition, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs,
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                );
                break;
            case '004clubs':
                list(
                    $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = clubsshift(
                    $holdcardposition, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs,
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                );
                break;
            case 'mycol001':
                $mycol1length = count($mycol1);
                $inicol1length = count($mycol1);
                list(
                    $inicol1, $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = mycol1shift(
                    $holdcardposition, $holdcardindex, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $pickcardindex, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs, $mycol1length, $inicol1length,
                    $inicol1, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                );
                break;
            case 'mycol002':
                $mycol2length = count($mycol2);
                $inicol2length = count($mycol2);
                list(
                    $inicol2, $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = mycol2shift(
                    $holdcardposition, $holdcardindex, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $pickcardindex, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs, $mycol2length, $inicol2length,
                    $inicol2, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                );
                break;
            case 'mycol003':
                $mycol3length = count($mycol3);
                $inicol3length = count($inicol3);
                list(
                    $inicol3, $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = mycol7shift(
                    $holdcardposition, $holdcardindex, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $pickcardindex, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs, $mycol3length, $inicol3length,
                    $inicol3, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7    
                );
                break;
            case 'mycol004':
                $mycol4length = count($mycol4);
                $inicol4length = count($inicol4);
                list(
                    $inicol4, $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = mycol4shift(
                    $holdcardposition, $holdcardindex, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $pickcardindex, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs, $mycol4length, $inicol4length,
                    $inicol4, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7    
                );
                break;
            case 'mycol005':
                $mycol5length = count($mycol5);
                $inicol5length = count($inicol5);
                list(
                    $inicol5, $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = mycol5shift(
                    $holdcardposition, $holdcardindex, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $pickcardindex, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs, $mycol5length, $inicol5length,
                    $inicol5, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7    
                );
                break;
            case 'mycol006':
                $mycol6length = count($mycol6);
                $inicol6length = count($inicol6);
                list(
                    $inicol6, $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = mycol6shift(
                    $holdcardposition, $holdcardindex, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $pickcardindex, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs, $mycol6length, $inicol6length,
                    $inicol6, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7    
                );
                break;
            case 'mycol007':
                $mycol7length = count($mycol7);
                $inicol7length = count($inicol7);
                list(
                    $inicol7, $spades, $hearts, $diamonds, $clubs, 
                    $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
                ) = mycol7shift(
                    $holdcardposition, $holdcardindex, $holdnum, $holdmark, $holdcard, 
                    $pickcardposition, $pickcardindex, $picknum, $pickmark, $pickcard, 
                    $spades, $hearts, $diamonds, $clubs, $mycol7length, $inicol7length,
                    $inicol7, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7    
                );
                break;
        }

        return array(
            $cards_f, $cards_r, $spades, $hearts, $diamonds, $clubs, 
            $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7, 
            $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
        );
    }
?>