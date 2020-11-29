<?php
                        if($deployflag == true){
                            if($inicol6cnt == 0){
                                if($mycol6cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<input type='radio' name='pickcard' value='col6card00empty' id='0empty1'>";
                                    echo "<label for='0empty1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    for($i=1;$i<$mycol6cnt;$i++){
                                        echo "<div class='row-" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol6[$i - 1]['mark'].$mycol6[$i - 1]['num'] . ".png'>";
                                        echo "</div>";
                                    }
                                    echo "<div class='row-" . $mycol6cnt . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol006" . $mycol6cnt . "__" . $mycol6[$mycol6cnt - 1]['num'].$mycol6[$mycol6cnt - 1]['mark'] . "' id='mycol006'>";
                                    echo "<label for='mycol006'>";
                                    echo "<img src='../cards/" . $mycol6[$mycol6cnt - 1]['mark'].$mycol6[$mycol6cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                    echo "</div>";
                                }
                            } else {
                                for($i=1;$i<$inicol6cnt;$i++){
                                    echo "<div class='row-" . $i . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol6cnt == 0){
                                    echo "<div class='row-" . $inicol6cnt . "'>";
                                    echo "<input type='radio' name='pickcard' value='col6card" .$inicol6[0]['num'].$inicol6[0]['mark'] . "' id='col6card" . $inicol6cnt . "'>";
                                    echo "<label for='col6card" . $inicol6cnt . "'>";
                                    echo "<img src='../cards/" . $inicol6[0]['mark'].$inicol6[0]['num'] . ".png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    echo "<div class='row-" . $inicol6cnt . "'>";
                                    echo "<img src='../cards/" . $inicol6[0]['mark'].$inicol6[0]['num'] . ".png'>";
                                    echo "</div>";
                                    for($i=0;$i<$mycol6cnt;$i++){
                                        echo "<div class='row-" . ($inicol6cnt + $i + 1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol006" . $i . "__" . $mycol6[$mycol6cnt - 1]['num'].$mycol6[$mycol6cnt - 1]['mark'] . "' id='mycol006" . $i . "'>";
                                        echo "<label for='mycol006" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol6[$i]['mark'].$mycol6[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        } else {
                            if($inicol6cnt == 0){
                                if($mycol6cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</div>";
                                } else {
                                    for($i=0;$i<$mycol6cnt;$i++){
                                        echo "<div class='row-" . ($i+1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol006" . $i . "__" . $mycol6[$i]['num'].$mycol6[$i]['mark'] . "' id='mycol006" . $i . "'>";
                                        echo "<label for='mycol006" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol6[$i]['mark'].$mycol6[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            } else {
                                for($i=1;$i<$inicol6cnt;$i++){
                                    echo "<div class='row-" . $i . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                echo "<div class='row-" . ($inicol6cnt) . "'>";
                                echo "<input type='radio' name='pickcard' value='col6card" . $inicol6[0]['num'].$inicol6[0]['mark'] . "' id='col6card" . $inicol6cnt . "'>";
                                echo "<label for='col6card" . $inicol6cnt . "'>";
                                echo "<img src='../cards/" . $inicol6[0]['mark'].$inicol6[0]['num'] . ".png'>";
                                echo "</label>";
                                echo "</div>";
                                if($mycol6cnt > 0){
                                    for($i=0;$i<$mycol6cnt;$i++){
                                        echo "<div class='row-" . ($inicol6cnt + $i + 1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol006" . $i . "__" . $mycol6[$i]['num'].$mycol6[$i]['mark'] . "' id='mycol006" . $i . "'>";
                                        echo "<label for='mycol006" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol6[$i]['mark'].$mycol6[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        }
?>