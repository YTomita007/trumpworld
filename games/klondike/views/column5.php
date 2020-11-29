<?php
                        if($deployflag == true){
                            if($inicol5cnt == 0){
                                if($mycol5cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<input type='radio' name='pickcard' value='col5card00empty' id='0empty1'>";
                                    echo "<label for='0empty1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    for($i=1;$i<$mycol5cnt;$i++){
                                        echo "<div class='row-" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol5[$i - 1]['mark'].$mycol5[$i - 1]['num'] . ".png'>";
                                        echo "</div>";
                                    }
                                    echo "<div class='row-" . $mycol5cnt . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol005" . $mycol5cnt . "__" . $mycol5[$mycol5cnt - 1]['num'].$mycol5[$mycol5cnt - 1]['mark'] . "' id='mycol005'>";
                                    echo "<label for='mycol005'>";
                                    echo "<img src='../cards/" . $mycol5[$mycol5cnt - 1]['mark'].$mycol5[$mycol5cnt - 1]['num'] . ".png'>";
                                    echo "</label>";    
                                    echo "</div>";
                                }
                            } else {
                                for($i=0;$i<$inicol5cnt;$i++){
                                    echo "<div class='row-" . ($i+1) . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol5cnt == 1){
                                    echo "<div class='row-" . ($inicol5cnt + 1) . "'>";
                                    echo "<input type='radio' name='pickcard' value='col5card" .$mycol5[0]['num'].$mycol5[0]['mark'] . "' id='mycol0050'>";
                                    echo "<label for='mycol0050'>";
                                    echo "<img src='../cards/" . $mycol5[0]['mark'].$mycol5[0]['num'] . ".png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    echo "<div class='row-" . ($inicol5cnt + 1) .  "'>";
                                    echo "<img src='../cards/" . $inicol5[$inicol5cnt - 1]['mark'].$inicol5[$inicol5cnt - 1]['num'] . ".png'>";
                                    echo "</div>";
                                    for($i=0;$i<$mycol5cnt;$i++){
                                        echo "<div class='row-" . ($inicol5cnt + $i + 2) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol005" . $i . "__" . $mycol5[$mycol5cnt - 1]['num'].$mycol5[$mycol5cnt - 1]['mark'] . "' id='mycol005" . $i . "'>";
                                        echo "<label for='mycol005" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol5[$i]['mark'].$mycol5[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        } else {
                            if($inicol5cnt == 0){
                                if($mycol5cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</div>";
                                } else {
                                    for($i=0;$i<$mycol5cnt;$i++){
                                        echo "<div class='row-" . ($i+1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol005" . $i . "__" . $mycol5[$i]['num'].$mycol5[$i]['mark'] . "' id='mycol005" . $i . "'>";
                                        echo "<label for='mycol005" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol5[$i]['mark'].$mycol5[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            } else {
                                for($i=0;$i<$inicol5cnt;$i++){
                                    echo "<div class='row-" . ($i+1) . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol5cnt > 0){
                                    for($i=0;$i<$mycol5cnt;$i++){
                                        echo "<div class='row-" . ($inicol5cnt + $i + 1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol005" . $i . "__" . $mycol5[$i]['num'].$mycol5[$i]['mark'] . "' id='mycol005" . $i . "'>";
                                        echo "<label for='mycol005" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol5[$i]['mark'].$mycol5[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        }
?>