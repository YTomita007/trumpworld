<?php
    session_start();

    ini_set( 'display_errors', 1 );

    require 'klondike_controller.php';

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
    } elseif(isset($_GET['pass'])) {
        list($cards_f, $cards_r) = deckcontroller($cards_fcnt, $cards_f, $cards_r);
    } else {
        list($cards_f, $inicol1, $inicol2, $inicol3, $inicol4, $inicol5, $inicol6, $inicol7) = initialize();
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
            <div class="commandbox">
                <div class="commandbuttan">
                    <ul>
                        <?php
                            if($deployflag == true){
                        ?>
                        <input type="hidden" name="command" value="move" >
                        <input type="hidden" name="holdcard" value="<?php echo $holdcard; ?>" >
                        <li><a href="#" onclick="document.cards_form.submit();">Move</a></li>
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
                    if (0 < $spadescnt){
                        echo "<input type='radio' name='pickcard' value='01spades" . $spades[$spadescnt - 1]['num'].$spades[$spadescnt - 1]['mark'] . "' id='01spades'>";
                        echo "<label for='01spades'>";
                        echo "<img src='../cards/" . $spades[$spadescnt - 1]['mark'].$spades[$spadescnt - 1]['num'] . ".png'>";
                        echo "</label>";
                    } else {
                        if($deployflag == true){
                            echo "<input type='radio' name='pickcard' value='01spades00spade' id='01spades'>";
                            echo "<label for='01spades'>";
                            echo "<img src='../cards/00spade.png'>";
                            echo "</label>";
                        } else {
                            echo "<img src='../cards/00spade.png'>";
                        }
                    }
                ?>
                </li>
                <li>
                <?php
                    if (0 < $heartscnt){
                        echo "<input type='radio' name='pickcard' value='02hearts" . $hearts[$heartscnt - 1]['num'].$hearts[$heartscnt - 1]['mark'] . "' id='02hearts'>";
                        echo "<label for='02hearts'>";
                        echo "<img src='../cards/" . $hearts[$heartscnt - 1]['mark'].$hearts[$heartscnt - 1]['num'] . ".png'>";
                        echo "</label>";
                    } else {
                        if($deployflag == true){
                            echo "<input type='radio' name='pickcard' value='02hearts00heart' id='02hearts'>";
                            echo "<label for='02hearts'>";
                            echo "<img src='../cards/00heart.png'>";
                            echo "</label>";
                        } else {
                            echo "<img src='../cards/00heart.png'>";
                        }
                    }
                ?>
                </li>
                <li>
                <?php
                    if (0 < $diamondscnt){
                        echo "<input type='radio' name='pickcard' value='diamonds" . $diamonds[$diamondscnt - 1]['num'].$diamonds[$diamondscnt - 1]['mark'] . "' id='diamonds'>";
                        echo "<label for='diamonds'>";
                        echo "<img src='../cards/" . $diamonds[$diamondscnt - 1]['mark'].$diamonds[$diamondscnt - 1]['num'] . ".png'>";
                        echo "</label>";
                    } else {
                        if($deployflag == true){
                            echo "<input type='radio' name='pickcard' value='diamonds00diamond' id='diamonds'>";
                            echo "<label for='diamonds'>";
                            echo "<img src='../cards/00diamond.png'>";
                            echo "</label>";
                        } else {
                            echo "<img src='../cards/00diamond.png'>";
                        }
                    }
                ?>
                </li>
                <li>
                <?php
                    if (0 < $clubscnt){
                        echo "<input type='radio' name='pickcard' value='004clubs" . $clubs[$clubscnt - 1]['num'].$clubs[$clubscnt - 1]['mark'] . "' id='004clubs'>";
                        echo "<label for='004clubs'>";
                        echo "<img src='../cards/" . $clubs[$clubscnt - 1]['mark'].$clubs[$clubscnt - 1]['num'] . ".png'>";
                        echo "</label>";
                    } else {
                        if($deployflag == true){
                            echo "<input type='radio' name='pickcard' value='004clubs00club' id='004clubs'>";
                            echo "<label for='004clubs'>";
                            echo "<img src='../cards/00club.png'>";
                            echo "</label>";
                        } else {
                            echo "<img src='../cards/00club.png'>";
                        }
                    }
                ?>
                </li>
            </ul>
            
            <hr>

            <ul>
                <li>
                    <td>
                        <?php
                        if($inicol1cnt == 0 && $mycol1cnt == 0 && $deployflag == false){
                            echo "<img src='../cards/0empty1.png'>";
                        } elseif($inicol1cnt == 0 && $mycol1cnt == 0 && $deployflag == true){
                            echo "<input type='radio' name='pickcard' value='col1card00empty' id='0empty1'>";
                            echo "<label for='0empty1'>";
                            echo "<img src='../cards/0empty1.png'>";
                            echo "</label>";
                        } elseif($inicol1cnt == 0 && $mycol1cnt > 0){
                            if(1 < $mycol1cnt){
                                for($i=0;$i<$mycol1cnt-1;$i++){
                                    echo "<img src='../cards/" . $mycol1[$i]['mark'].$mycol1[$i]['num'] . ".png'>";
                                }
                                echo "<input type='radio' name='pickcard' value='mycol001" . $mycol1[$mycol1cnt - 1]['num'].$mycol1[$mycol1cnt - 1]['mark'] . "' id='mycol001'>";
                                echo "<label for='mycol001'>";
                                echo "<img src='../cards/" . $mycol1[$mycol1cnt - 1]['mark'].$mycol1[$mycol1cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            } else {
                                echo "<input type='radio' name='pickcard' value='mycol001" . $mycol1[$mycol1cnt - 1]['num'].$mycol1[$mycol1cnt - 1]['mark'] . "' id='mycol001'>";
                                echo "<label for='mycol001'>";
                                echo "<img src='../cards/" . $mycol1[$mycol1cnt - 1]['mark'].$mycol1[$mycol1cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            }
                        } else {
                            for($i=1;$i<$inicol1cnt;$i++){
                                echo "<img src='../cards/backcard.png'>";
                            }
                            if($deployflag == true && 0 < $mycol1cnt){
                                echo "<img src='../cards/" . $inicol1[0]['mark'].$inicol1[0]['num'] . ".png'>";
                                if(1 < $mycol1cnt){
                                    for($i=0;$i<$mycol1cnt-1;$i++){
                                        echo "<img src='../cards/" . $mycol1[$i]['mark'].$mycol1[$i]['num'] . ".png'>";
                                    }
                                    echo "<input type='radio' name='pickcard' value='mycol001" . $mycol1[$mycol1cnt - 1]['num'].$mycol1[$mycol1cnt - 1]['mark'] . "' id='mycol001'>";
                                    echo "<label for='mycol001'>";
                                    echo "<img src='../cards/" . $mycol1[$mycol1cnt - 1]['mark'].$mycol1[$mycol1cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                } else {
                                    echo "<input type='radio' name='pickcard' value='mycol001" . $mycol1[$mycol1cnt - 1]['num'].$mycol1[$mycol1cnt - 1]['mark'] . "' id='mycol001'>";
                                    echo "<label for='mycol001'>";
                                    echo "<img src='../cards/" . $mycol1[$mycol1cnt - 1]['mark'].$mycol1[$mycol1cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                }
                            } else {
                                echo "<input type='radio' name='pickcard' value='col1card" . $inicol1[0]['num'].$inicol1[0]['mark'] . "' id='col1card'>";
                                echo "<label for='col1card'>";
                                echo "<img src='../cards/" . $inicol1[0]['mark'].$inicol1[0]['num'] . ".png'>";
                                echo "</label>";
                                if(0 < $mycol1cnt){
                                    foreach($mycol1 as $index => $card){
                                        echo "<input type='radio' name='pickcard' value='mycol001" . $card['num'].$card['mark'] . "' id='mycol001" . $index . "'>";
                                        echo "<label for='mycol001" . $index . "'>";
                                        echo "<img src='../cards/" . $card['mark'].$card['num'] . ".png'>";
                                        echo "</label>";
                                    }
                                }
                            }
                        }
                        ?>
                    </td>
                </li>
                <li>
                    <td>
                        <?php
                        if($inicol2cnt == 0 && $mycol2cnt == 0 && $deployflag == false){
                            echo "<img src='../cards/0empty1.png'>";
                        } elseif($inicol2cnt == 0 && $mycol2cnt == 0 && $deployflag == true){
                            echo "<input type='radio' name='pickcard' value='col2card00empty' id='0empty1'>";
                            echo "<label for='0empty1'>";
                            echo "<img src='../cards/0empty1.png'>";
                            echo "</label>";
                        } elseif($inicol2cnt == 0 && $mycol2cnt > 0){
                            if(1 < $mycol2cnt){
                                for($i=0;$i<$mycol2cnt-1;$i++){
                                    echo "<img src='../cards/" . $mycol2[$i]['mark'].$mycol2[$i]['num'] . ".png'>";
                                }
                                echo "<input type='radio' name='pickcard' value='mycol002" . $mycol2[$mycol2cnt - 1]['num'].$mycol2[$mycol2cnt - 1]['mark'] . "' id='mycol002'>";
                                echo "<label for='mycol002'>";
                                echo "<img src='../cards/" . $mycol2[$mycol2cnt - 1]['mark'].$mycol2[$mycol2cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            } else {
                                echo "<input type='radio' name='pickcard' value='mycol002" . $mycol2[$mycol2cnt - 1]['num'].$mycol2[$mycol2cnt - 1]['mark'] . "' id='mycol002'>";
                                echo "<label for='mycol002'>";
                                echo "<img src='../cards/" . $mycol2[$mycol2cnt - 1]['mark'].$mycol2[$mycol2cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            }
                        } else {
                            for($i=1;$i<$inicol2cnt;$i++){
                                echo "<img src='../cards/backcard.png'>";
                            }
                            if($deployflag == true && 0 < $mycol2cnt){
                                echo "<img src='../cards/" . $inicol2[0]['mark'].$inicol2[0]['num'] . ".png'>";
                                if(1 < $mycol2cnt){
                                    for($i=0;$i<$mycol2cnt-1;$i++){
                                        echo "<img src='../cards/" . $mycol2[$i]['mark'].$mycol2[$i]['num'] . ".png'>";
                                    }
                                    echo "<input type='radio' name='pickcard' value='mycol002" . $mycol2[$mycol2cnt - 1]['num'].$mycol2[$mycol2cnt - 1]['mark'] . "' id='mycol002'>";
                                    echo "<label for='mycol002'>";
                                    echo "<img src='../cards/" . $mycol2[$mycol2cnt - 1]['mark'].$mycol2[$mycol2cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                } else {
                                    echo "<input type='radio' name='pickcard' value='mycol002" . $mycol2[$mycol2cnt - 1]['num'].$mycol2[$mycol2cnt - 1]['mark'] . "' id='mycol002'>";
                                    echo "<label for='mycol002'>";
                                    echo "<img src='../cards/" . $mycol2[$mycol2cnt - 1]['mark'].$mycol2[$mycol2cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                }
                            } else {
                                echo "<input type='radio' name='pickcard' value='col2card" . $inicol2[0]['num'].$inicol2[0]['mark'] . "' id='col2card'>";
                                echo "<label for='col2card'>";
                                echo "<img src='../cards/" . $inicol2[0]['mark'].$inicol2[0]['num'] . ".png'>";
                                echo "</label>";
                                if(0 < $mycol2cnt){
                                    foreach($mycol2 as $index => $card){
                                        echo "<input type='radio' name='pickcard' value='mycol002" . $card['num'].$card['mark'] . "' id='mycol002'>";
                                        echo "<label for='mycol002'>";
                                        echo "<img src='../cards/" . $card['mark'].$card['num'] . ".png'>";
                                        echo "</label>";
                                    }
                                }
                            }
                        }
                        ?>
                    </td>
                </li>
                <li>
                    <td>
                        <?php
                        if($inicol3cnt == 0 && $mycol3cnt == 0 && $deployflag == false){
                            echo "<img src='../cards/0empty1.png'>";
                        } elseif($inicol3cnt == 0 && $mycol3cnt == 0 && $deployflag == true){
                            echo "<input type='radio' name='pickcard' value='col3card00empty' id='0empty1'>";
                            echo "<label for='0empty1'>";
                            echo "<img src='../cards/0empty1.png'>";
                            echo "</label>";
                        } elseif($inicol3cnt == 0 && $mycol3cnt > 0){
                            if(1 < $mycol3cnt){
                                for($i=0;$i<$mycol3cnt-1;$i++){
                                    echo "<img src='../cards/" . $mycol3[$i]['mark'].$mycol3[$i]['num'] . ".png'>";
                                }
                                echo "<input type='radio' name='pickcard' value='mycol003" . $mycol3[$mycol3cnt - 1]['num'].$mycol3[$mycol3cnt - 1]['mark'] . "' id='mycol003'>";
                                echo "<label for='mycol003'>";
                                echo "<img src='../cards/" . $mycol3[$mycol3cnt - 1]['mark'].$mycol3[$mycol3cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            } else {
                                echo "<input type='radio' name='pickcard' value='mycol003" . $mycol3[$mycol3cnt - 1]['num'].$mycol3[$mycol3cnt - 1]['mark'] . "' id='mycol003'>";
                                echo "<label for='mycol003'>";
                                echo "<img src='../cards/" . $mycol3[$mycol3cnt - 1]['mark'].$mycol3[$mycol3cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            }
                        } else {
                            for($i=1;$i<$inicol3cnt;$i++){
                                echo "<img src='../cards/backcard.png'>";
                            }
                            if($deployflag == true && 0 < $mycol3cnt){
                                echo "<img src='../cards/" . $inicol3[0]['mark'].$inicol3[0]['num'] . ".png'>";
                                if(1 < $mycol3cnt){
                                    for($i=0;$i<$mycol3cnt-1;$i++){
                                        echo "<img src='../cards/" . $mycol3[$i]['mark'].$mycol3[$i]['num'] . ".png'>";
                                    }
                                    echo "<input type='radio' name='pickcard' value='mycol003" . $mycol3[$mycol3cnt - 1]['num'].$mycol3[$mycol3cnt - 1]['mark'] . "' id='mycol003'>";
                                    echo "<label for='mycol003'>";
                                    echo "<img src='../cards/" . $mycol3[$mycol3cnt - 1]['mark'].$mycol3[$mycol3cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                } else {
                                    echo "<input type='radio' name='pickcard' value='mycol003" . $mycol3[$mycol3cnt - 1]['num'].$mycol3[$mycol3cnt - 1]['mark'] . "' id='mycol003'>";
                                    echo "<label for='mycol003'>";
                                    echo "<img src='../cards/" . $mycol3[$mycol3cnt - 1]['mark'].$mycol3[$mycol3cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                }
                            } else {
                                echo "<input type='radio' name='pickcard' value='col3card" . $inicol3[0]['num'].$inicol3[0]['mark'] . "' id='col3card'>";
                                echo "<label for='col3card'>";
                                echo "<img src='../cards/" . $inicol3[0]['mark'].$inicol3[0]['num'] . ".png'>";
                                echo "</label>";
                                if(0 < $mycol3cnt){
                                    foreach($mycol3 as $index => $card){
                                        echo "<input type='radio' name='pickcard' value='mycol003" . $card['num'].$card['mark'] . "' id='mycol003'>";
                                        echo "<label for='mycol003'>";
                                        echo "<img src='../cards/" . $card['mark'].$card['num'] . ".png'>";
                                        echo "</label>";
                                    }
                                }
                            }
                        }
                        ?>
                    </td>
                </li>
                <li>
                    <td>
                        <?php
                        if($inicol4cnt == 0 && $mycol4cnt == 0 && $deployflag == false){
                            echo "<img src='../cards/0empty1.png'>";
                        } elseif($inicol4cnt == 0 && $mycol4cnt == 0 && $deployflag == true){
                            echo "<input type='radio' name='pickcard' value='col4card00empty' id='0empty1'>";
                            echo "<label for='0empty1'>";
                            echo "<img src='../cards/0empty1.png'>";
                            echo "</label>";
                        } elseif($inicol4cnt == 0 && $mycol4cnt > 0){
                            if(1 < $mycol4cnt){
                                for($i=0;$i<$mycol4cnt-1;$i++){
                                    echo "<img src='../cards/" . $mycol4[$i]['mark'].$mycol4[$i]['num'] . ".png'>";
                                }
                                echo "<input type='radio' name='pickcard' value='mycol004" . $mycol4[$mycol4cnt - 1]['num'].$mycol4[$mycol4cnt - 1]['mark'] . "' id='mycol004'>";
                                echo "<label for='mycol004'>";
                                echo "<img src='../cards/" . $mycol4[$mycol4cnt - 1]['mark'].$mycol4[$mycol4cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            } else {
                                echo "<input type='radio' name='pickcard' value='mycol004" . $mycol4[$mycol4cnt - 1]['num'].$mycol4[$mycol4cnt - 1]['mark'] . "' id='mycol004'>";
                                echo "<label for='mycol004'>";
                                echo "<img src='../cards/" . $mycol4[$mycol4cnt - 1]['mark'].$mycol4[$mycol4cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            }
                        } else {
                            for($i=1;$i<$inicol4cnt;$i++){
                                echo "<img src='../cards/backcard.png'>";
                            }
                            if($deployflag == true && 0 < $mycol4cnt){
                                echo "<img src='../cards/" . $inicol4[0]['mark'].$inicol4[0]['num'] . ".png'>";
                                if(1 < $mycol4cnt){
                                    for($i=0;$i<$mycol4cnt-1;$i++){
                                        echo "<img src='../cards/" . $mycol4[$i]['mark'].$mycol4[$i]['num'] . ".png'>";
                                    }
                                    echo "<input type='radio' name='pickcard' value='mycol004" . $mycol4[$mycol4cnt - 1]['num'].$mycol4[$mycol4cnt - 1]['mark'] . "' id='mycol004'>";
                                    echo "<label for='mycol004'>";
                                    echo "<img src='../cards/" . $mycol4[$mycol4cnt - 1]['mark'].$mycol4[$mycol4cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                } else {
                                    echo "<input type='radio' name='pickcard' value='mycol004" . $mycol4[$mycol4cnt - 1]['num'].$mycol4[$mycol4cnt - 1]['mark'] . "' id='mycol004'>";
                                    echo "<label for='mycol004'>";
                                    echo "<img src='../cards/" . $mycol4[$mycol4cnt - 1]['mark'].$mycol4[$mycol4cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                }
                            } else {
                                echo "<input type='radio' name='pickcard' value='col4card" . $inicol4[0]['num'].$inicol4[0]['mark'] . "' id='col4card'>";
                                echo "<label for='col4card'>";
                                echo "<img src='../cards/" . $inicol4[0]['mark'].$inicol4[0]['num'] . ".png'>";
                                echo "</label>";
                                if(0 < $mycol4cnt){
                                    foreach($mycol4 as $index => $card){
                                        echo "<input type='radio' name='pickcard' value='mycol004" . $card['num'].$card['mark'] . "' id='mycol004'>";
                                        echo "<label for='mycol004'>";
                                        echo "<img src='../cards/" . $card['mark'].$card['num'] . ".png'>";
                                        echo "</label>";
                                    }
                                }
                            }
                        }
                        ?>
                    </td>
                </li>
                <li>
                    <td>
                        <?php
                        if($inicol5cnt == 0 && $mycol5cnt == 0 && $deployflag == false){
                            echo "<img src='../cards/0empty1.png'>";
                        } elseif($inicol5cnt == 0 && $mycol5cnt == 0 && $deployflag == true){
                            echo "<input type='radio' name='pickcard' value='col5card00empty' id='0empty1'>";
                            echo "<label for='0empty1'>";
                            echo "<img src='../cards/0empty1.png'>";
                            echo "</label>";
                        } elseif($inicol5cnt == 0 && $mycol5cnt > 0){
                            if(1 < $mycol5cnt){
                                for($i=0;$i<$mycol5cnt-1;$i++){
                                    echo "<img src='../cards/" . $mycol5[$i]['mark'].$mycol5[$i]['num'] . ".png'>";
                                }
                                echo "<input type='radio' name='pickcard' value='mycol005" . $mycol5[$mycol5cnt - 1]['num'].$mycol5[$mycol5cnt - 1]['mark'] . "' id='mycol005'>";
                                echo "<label for='mycol005'>";
                                echo "<img src='../cards/" . $mycol5[$mycol5cnt - 1]['mark'].$mycol5[$mycol5cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            } else {
                                echo "<input type='radio' name='pickcard' value='mycol005" . $mycol5[$mycol5cnt - 1]['num'].$mycol5[$mycol5cnt - 1]['mark'] . "' id='mycol005'>";
                                echo "<label for='mycol005'>";
                                echo "<img src='../cards/" . $mycol5[$mycol5cnt - 1]['mark'].$mycol5[$mycol5cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            }
                        } else {
                            for($i=1;$i<$inicol5cnt;$i++){
                                echo "<img src='../cards/backcard.png'>";
                            }
                            if($deployflag == true && 0 < $mycol5cnt){
                                echo "<img src='../cards/" . $inicol5[0]['mark'].$inicol5[0]['num'] . ".png'>";
                                if(1 < $mycol5cnt){
                                    for($i=0;$i<$mycol5cnt-1;$i++){
                                        echo "<img src='../cards/" . $mycol5[$i]['mark'].$mycol5[$i]['num'] . ".png'>";
                                    }
                                    echo "<input type='radio' name='pickcard' value='mycol005" . $mycol5[$mycol5cnt - 1]['num'].$mycol5[$mycol5cnt - 1]['mark'] . "' id='mycol005'>";
                                    echo "<label for='mycol005'>";
                                    echo "<img src='../cards/" . $mycol5[$mycol5cnt - 1]['mark'].$mycol5[$mycol5cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                } else {
                                    echo "<input type='radio' name='pickcard' value='mycol005" . $mycol5[$mycol5cnt - 1]['num'].$mycol5[$mycol5cnt - 1]['mark'] . "' id='mycol005'>";
                                    echo "<label for='mycol005'>";
                                    echo "<img src='../cards/" . $mycol5[$mycol5cnt - 1]['mark'].$mycol5[$mycol5cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                }
                            } else {
                                echo "<input type='radio' name='pickcard' value='col5card" . $inicol5[0]['num'].$inicol5[0]['mark'] . "' id='col5card'>";
                                echo "<label for='col5card'>";
                                echo "<img src='../cards/" . $inicol5[0]['mark'].$inicol5[0]['num'] . ".png'>";
                                echo "</label>";
                                if(0 < $mycol5cnt){
                                    foreach($mycol5 as $index => $card){
                                        echo "<input type='radio' name='pickcard' value='mycol005" . $card['num'].$card['mark'] . "' id='mycol005" . $index . "'>";
                                        echo "<label for='mycol005" . $index . "'>";
                                        echo "<img src='../cards/" . $card['mark'].$card['num'] . ".png'>";
                                        echo "</label>";
                                    }
                                }
                            }
                        }
                        ?>
                    </td>
                </li>
                <li>
                    <td>
                        <?php
                        if($inicol6cnt == 0 && $mycol6cnt == 0 && $deployflag == false){
                            echo "<img src='../cards/0empty1.png'>";
                        } elseif($inicol6cnt == 0 && $mycol6cnt == 0 && $deployflag == true){
                            echo "<input type='radio' name='pickcard' value='col6card00empty' id='0empty1'>";
                            echo "<label for='0empty1'>";
                            echo "<img src='../cards/0empty1.png'>";
                            echo "</label>";
                        } elseif($inicol6cnt == 0 && $mycol6cnt > 0){
                            if(1 < $mycol6cnt){
                                for($i=0;$i<$mycol6cnt-1;$i++){
                                    echo "<img src='../cards/" . $mycol6[$i]['mark'].$mycol6[$i]['num'] . ".png'>";
                                }
                                echo "<input type='radio' name='pickcard' value='mycol006" . $mycol6[$mycol6cnt - 1]['num'].$mycol6[$mycol6cnt - 1]['mark'] . "' id='mycol006'>";
                                echo "<label for='mycol006'>";
                                echo "<img src='../cards/" . $mycol6[$mycol6cnt - 1]['mark'].$mycol6[$mycol6cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            } else {
                                echo "<input type='radio' name='pickcard' value='mycol006" . $mycol6[$mycol6cnt - 1]['num'].$mycol6[$mycol6cnt - 1]['mark'] . "' id='mycol006'>";
                                echo "<label for='mycol006'>";
                                echo "<img src='../cards/" . $mycol6[$mycol6cnt - 1]['mark'].$mycol6[$mycol6cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            }
                        } else {
                            for($i=1;$i<$inicol6cnt;$i++){
                                echo "<img src='../cards/backcard.png'>";
                            }
                            if($deployflag == true && 0 < $mycol6cnt){
                                echo "<img src='../cards/" . $inicol6[0]['mark'].$inicol6[0]['num'] . ".png'>";
                                if(1 < $mycol6cnt){
                                    for($i=0;$i<$mycol6cnt-1;$i++){
                                        echo "<img src='../cards/" . $mycol6[$i]['mark'].$mycol6[$i]['num'] . ".png'>";
                                    }
                                    echo "<input type='radio' name='pickcard' value='mycol006" . $mycol6[$mycol6cnt - 1]['num'].$mycol6[$mycol6cnt - 1]['mark'] . "' id='mycol006'>";
                                    echo "<label for='mycol006'>";
                                    echo "<img src='../cards/" . $mycol6[$mycol6cnt - 1]['mark'].$mycol6[$mycol6cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                } else {
                                    echo "<input type='radio' name='pickcard' value='mycol006" . $mycol6[$mycol6cnt - 1]['num'].$mycol6[$mycol6cnt - 1]['mark'] . "' id='mycol006'>";
                                    echo "<label for='mycol006'>";
                                    echo "<img src='../cards/" . $mycol6[$mycol6cnt - 1]['mark'].$mycol6[$mycol6cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                }
                            } else {
                                echo "<input type='radio' name='pickcard' value='col6card" . $inicol6[0]['num'].$inicol6[0]['mark'] . "' id='col6card'>";
                                echo "<label for='col6card'>";
                                echo "<img src='../cards/" . $inicol6[0]['mark'].$inicol6[0]['num'] . ".png'>";
                                echo "</label>";
                                if(0 < $mycol6cnt){
                                    foreach($mycol6 as $index => $card){
                                        echo "<input type='radio' name='pickcard' value='mycol006" . $card['num'].$card['mark'] . "' id='mycol006'>";
                                        echo "<label for='mycol006'>";
                                        echo "<img src='../cards/" . $card['mark'].$card['num'] . ".png'>";
                                        echo "</label>";
                                    }
                                }
                            }
                        }
                        ?>
                    </td>
                </li>
                <li>
                    <td>
                        <?php
                        if($inicol7cnt == 0 && $mycol7cnt == 0 && $deployflag == false){
                            echo "<img src='../cards/0empty1.png'>";
                        } elseif($inicol7cnt == 0 && $mycol7cnt == 0 && $deployflag == true){
                            echo "<input type='radio' name='pickcard' value='col7card00empty' id='0empty1'>";
                            echo "<label for='0empty1'>";
                            echo "<img src='../cards/0empty1.png'>";
                            echo "</label>";
                        } elseif($inicol7cnt == 0 && $mycol7cnt > 0){
                            if(1 < $mycol7cnt){
                                for($i=0;$i<$mycol7cnt-1;$i++){
                                    echo "<img src='../cards/" . $mycol7[$i]['mark'].$mycol7[$i]['num'] . ".png'>";
                                }
                                echo "<input type='radio' name='pickcard' value='mycol007" . $mycol7[$mycol7cnt - 1]['num'].$mycol7[$mycol7cnt - 1]['mark'] . "' id='mycol007'>";
                                echo "<label for='mycol007'>";
                                echo "<img src='../cards/" . $mycol7[$mycol7cnt - 1]['mark'].$mycol7[$mycol7cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            } else {
                                echo "<input type='radio' name='pickcard' value='mycol007" . $mycol7[$mycol7cnt - 1]['num'].$mycol7[$mycol7cnt - 1]['mark'] . "' id='mycol007'>";
                                echo "<label for='mycol007'>";
                                echo "<img src='../cards/" . $mycol7[$mycol7cnt - 1]['mark'].$mycol7[$mycol7cnt - 1]['num'] . ".png'>";
                                echo "</label>";
                            }
                        } else {
                            for($i=1;$i<$inicol7cnt;$i++){
                                echo "<img src='../cards/backcard.png'>";
                            }
                            if($deployflag == true && 0 < $mycol7cnt){
                                echo "<img src='../cards/" . $inicol7[0]['mark'].$inicol7[0]['num'] . ".png'>";
                                if(1 < $mycol7cnt){
                                    for($i=0;$i<$mycol7cnt-1;$i++){
                                        echo "<img src='../cards/" . $mycol7[$i]['mark'].$mycol7[$i]['num'] . ".png'>";
                                    }
                                    echo "<input type='radio' name='pickcard' value='mycol007" . $mycol7[$mycol7cnt - 1]['num'].$mycol7[$mycol7cnt - 1]['mark'] . "' id='mycol007'>";
                                    echo "<label for='mycol007'>";
                                    echo "<img src='../cards/" . $mycol7[$mycol7cnt - 1]['mark'].$mycol7[$mycol7cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                } else {
                                    echo "<input type='radio' name='pickcard' value='mycol007" . $mycol7[$mycol7cnt - 1]['num'].$mycol7[$mycol7cnt - 1]['mark'] . "' id='mycol007'>";
                                    echo "<label for='mycol007'>";
                                    echo "<img src='../cards/" . $mycol7[$mycol7cnt - 1]['mark'].$mycol7[$mycol7cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                }
                            } else {
                                echo "<input type='radio' name='pickcard' value='col7card" . $inicol7[0]['num'].$inicol7[0]['mark'] . "' id='col7card'>";
                                echo "<label for='col7card'>";
                                echo "<img src='../cards/" . $inicol7[0]['mark'].$inicol7[0]['num'] . ".png'>";
                                echo "</label>";
                                if(0 < $mycol7cnt){
                                    foreach($mycol7 as $index => $card){
                                        echo "<input type='radio' name='pickcard' value='mycol007" . $card['num'].$card['mark'] . "' id='mycol007'>";
                                        echo "<label for='mycol007'>";
                                        echo "<img src='../cards/" . $card['mark'].$card['num'] . ".png'>";
                                        echo "</label>";
                                    }
                                }
                            }
                        }
                        ?>
                    </td>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>