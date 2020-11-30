<?php
                        if($deployflag == true){
                            if($inicol3cnt == 0){
                                if($mycol3cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<input type='radio' name='pickcard' value='col3card00empty' id='0empty1'>";
                                    echo "<label for='0empty1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    for($i=1;$i<$mycol3cnt;$i++){
                                        echo "<div class='row-" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol3[$i - 1]['mark'].$mycol3[$i - 1]['num'] . ".png'>";
                                        echo "</div>";
                                    }
                                    echo "<div class='row-" . $mycol3cnt . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol003" . $mycol3cnt . "__" . $mycol3[$mycol3cnt - 1]['num'].$mycol3[$mycol3cnt - 1]['mark'] . "' id='mycol003'>";
                                    echo "<label for='mycol003'>";
                                    echo "<img src='../cards/" . $mycol3[$mycol3cnt - 1]['mark'].$mycol3[$mycol3cnt - 1]['num'] . ".png'>";
                                    echo "</label>";    
                                    echo "</div>";
                                }
                            } else {
                                for($i=1;$i<$inicol3cnt + 1;$i++){
                                    echo "<div class='row-" . $i . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol3cnt == 1){
                                    echo "<div class='row-" . ($inicol3cnt + 1) . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol003" .$mycol3[0]['num'].$mycol3[0]['mark'] . "' id='mycol0030'>";
                                    echo "<label for='mycol0030'>";
                                    echo "<img src='../cards/" . $mycol3[0]['mark'].$mycol3[0]['num'] . ".png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    for($i=1;$i<$mycol3cnt;$i++){
                                        echo "<div class='row-" . ($inicol3cnt + $i) . "'>";
                                        echo "<img src='../cards/" . $mycol3[$i - 1]['mark'].$mycol3[$i - 1]['num'] . ".png'>";
                                        echo "</div>";
                                    }
                                    echo "<div class='row-" . ($inicol3cnt + $mycol3cnt) . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol003" .$mycol3[$mycol3cnt - 1]['num'].$mycol3[$mycol3cnt - 1]['mark'] . "' id='mycol0030'>";
                                    echo "<label for='mycol0030'>";
                                    echo "<img src='../cards/" . $mycol3[$mycol3cnt - 1]['mark'].$mycol3[$mycol3cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                    echo "</div>";
                                }
                            }
                        } else {
                            if($inicol3cnt == 0){
                                if($mycol3cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</div>";
                                } else {
                                    for($i=0;$i<$mycol3cnt;$i++){
                                        echo "<div class='row-" . ($i+1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol003" . $i . "__" . $mycol3[$i]['num'].$mycol3[$i]['mark'] . "' id='mycol003" . $i . "'>";
                                        echo "<label for='mycol003" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol3[$i]['mark'].$mycol3[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            } else {
                                for($i=0;$i<$inicol3cnt;$i++){
                                    echo "<div class='row-" . ($i+1) . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol3cnt > 0){
                                    for($i=0;$i<$mycol3cnt;$i++){
                                        echo "<div class='row-" . ($inicol3cnt + $i + 1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol003" . $i . "__" . $mycol3[$i]['num'].$mycol3[$i]['mark'] . "' id='mycol003" . $i . "'>";
                                        echo "<label for='mycol003" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol3[$i]['mark'].$mycol3[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        }
?>