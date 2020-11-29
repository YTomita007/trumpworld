<?php
                        if($deployflag == true){
                            if($inicol4cnt == 0){
                                if($mycol4cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<input type='radio' name='pickcard' value='col4card00empty' id='0empty1'>";
                                    echo "<label for='0empty1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    for($i=1;$i<$mycol4cnt;$i++){
                                        echo "<div class='row-" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol4[$i - 1]['mark'].$mycol4[$i - 1]['num'] . ".png'>";
                                        echo "</div>";
                                    }
                                    echo "<div class='row-" . $mycol4cnt . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol004" . $mycol4cnt . "__" . $mycol4[$mycol4cnt - 1]['num'].$mycol4[$mycol4cnt - 1]['mark'] . "' id='mycol004'>";
                                    echo "<label for='mycol004'>";
                                    echo "<img src='../cards/" . $mycol4[$mycol4cnt - 1]['mark'].$mycol4[$mycol4cnt - 1]['num'] . ".png'>";
                                    echo "</label>";    
                                    echo "</div>";
                                }
                            } else {
                                for($i=0;$i<$inicol4cnt;$i++){
                                    echo "<div class='row-" . ($i+1) . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol4cnt == 1){
                                    echo "<div class='row-" . ($inicol4cnt + 1) . "'>";
                                    echo "<input type='radio' name='pickcard' value='col4card" .$mycol4[0]['num'].$mycol4[0]['mark'] . "' id='mycol0040'>";
                                    echo "<label for='mycol0040'>";
                                    echo "<img src='../cards/" . $mycol4[0]['mark'].$mycol4[0]['num'] . ".png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    echo "<div class='row-" . ($inicol4cnt + 1) .  "'>";
                                    echo "<img src='../cards/" . $inicol4[$inicol4cnt - 1]['mark'].$inicol4[$inicol4cnt - 1]['num'] . ".png'>";
                                    echo "</div>";
                                    for($i=0;$i<$mycol4cnt;$i++){
                                        echo "<div class='row-" . ($inicol4cnt + $i + 2) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol004" . $i . "__" . $mycol4[$mycol4cnt - 1]['num'].$mycol4[$mycol4cnt - 1]['mark'] . "' id='mycol004" . $i . "'>";
                                        echo "<label for='mycol004" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol4[$i]['mark'].$mycol4[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        } else {
                            if($inicol4cnt == 0){
                                if($mycol4cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</div>";
                                } else {
                                    for($i=0;$i<$mycol4cnt;$i++){
                                        echo "<div class='row-" . ($i+1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol004" . $i . "__" . $mycol4[$i]['num'].$mycol4[$i]['mark'] . "' id='mycol004" . $i . "'>";
                                        echo "<label for='mycol004" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol4[$i]['mark'].$mycol4[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            } else {
                                for($i=0;$i<$inicol4cnt;$i++){
                                    echo "<div class='row-" . ($i+1) . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol4cnt > 0){
                                    for($i=0;$i<$mycol4cnt;$i++){
                                        echo "<div class='row-" . ($inicol4cnt + $i + 1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol004" . $i . "__" . $mycol4[$i]['num'].$mycol4[$i]['mark'] . "' id='mycol004" . $i . "'>";
                                        echo "<label for='mycol004" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol4[$i]['mark'].$mycol4[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        }
?>