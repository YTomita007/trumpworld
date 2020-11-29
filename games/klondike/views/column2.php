<?php
                        if($deployflag == true){
                            if($inicol2cnt == 0){
                                if($mycol2cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<input type='radio' name='pickcard' value='col2card00empty' id='0empty1'>";
                                    echo "<label for='0empty1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    for($i=1;$i<$mycol2cnt;$i++){
                                        echo "<div class='row-" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol2[$i - 1]['mark'].$mycol2[$i - 1]['num'] . ".png'>";
                                        echo "</div>";
                                    }
                                    echo "<div class='row-" . $mycol2cnt . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol002" . $mycol2cnt . "__" . $mycol2[$mycol2cnt - 1]['num'].$mycol2[$mycol2cnt - 1]['mark'] . "' id='mycol002'>";
                                    echo "<label for='mycol002'>";
                                    echo "<img src='../cards/" . $mycol2[$mycol2cnt - 1]['mark'].$mycol2[$mycol2cnt - 1]['num'] . ".png'>";
                                    echo "</label>";    
                                    echo "</div>";
                                }
                            } else {
                                for($i=1;$i<$inicol2cnt;$i++){
                                    echo "<div class='row-" . $i . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol2cnt == 0){
                                    echo "<div class='row-" . $inicol2cnt . "'>";
                                    echo "<input type='radio' name='pickcard' value='col2card" .$inicol2[0]['num'].$inicol2[0]['mark'] . "' id='col2card" . $inicol2cnt . "'>";
                                    echo "<label for='col2card" . $inicol2cnt . "'>";
                                    echo "<img src='../cards/" . $inicol2[0]['mark'].$inicol2[0]['num'] . ".png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    echo "<div class='row-" . $inicol2cnt . "'>";
                                    echo "<img src='../cards/" . $inicol2[0]['mark'].$inicol2[0]['num'] . ".png'>";
                                    echo "</div>";
                                    for($i=0;$i<$mycol2cnt;$i++){
                                        echo "<div class='row-" . ($inicol2cnt + $i + 1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol002" . $i . "__" . $mycol2[$mycol2cnt - 1]['num'].$mycol2[$mycol2cnt - 1]['mark'] . "' id='mycol002" . $i . "'>";
                                        echo "<label for='mycol002" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol2[$i]['mark'].$mycol2[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        } else {
                            if($inicol2cnt == 0){
                                if($mycol2cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</div>";
                                } else {
                                    for($i=0;$i<$mycol2cnt;$i++){
                                        echo "<div class='row-" . ($i+1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol002" . $i . "__" . $mycol2[$i]['num'].$mycol2[$i]['mark'] . "' id='mycol002" . $i . "'>";
                                        echo "<label for='mycol002" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol2[$i]['mark'].$mycol2[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            } else {
                                for($i=1;$i<$inicol2cnt;$i++){
                                    echo "<div class='row-" . $i . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                echo "<div class='row-" . ($inicol2cnt) . "'>";
                                echo "<input type='radio' name='pickcard' value='col2card" . $inicol2[0]['num'].$inicol2[0]['mark'] . "' id='col2card" . $inicol2cnt . "'>";
                                echo "<label for='col2card" . $inicol2cnt . "'>";
                                echo "<img src='../cards/" . $inicol2[0]['mark'].$inicol2[0]['num'] . ".png'>";
                                echo "</label>";
                                echo "</div>";
                                if($mycol2cnt > 0){
                                    for($i=0;$i<$mycol2cnt;$i++){
                                        echo "<div class='row-" . ($inicol2cnt + $i + 1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol002" . $i . "__" . $mycol2[$i]['num'].$mycol2[$i]['mark'] . "' id='mycol002" . $i . "'>";
                                        echo "<label for='mycol002" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol2[$i]['mark'].$mycol2[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        }
?>