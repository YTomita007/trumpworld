<?php
                        if($deployflag == true){
                            if($inicol7cnt == 0){
                                if($mycol7cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<input type='radio' name='pickcard' value='col7card00empty' id='0empty1'>";
                                    echo "<label for='0empty1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    for($i=1;$i<$mycol7cnt;$i++){
                                        echo "<div class='row-" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol7[$i - 1]['mark'].$mycol7[$i - 1]['num'] . ".png'>";
                                        echo "</div>";
                                    }
                                    echo "<div class='row-" . $mycol7cnt . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol007" . $mycol7cnt . "__" . $mycol7[$mycol7cnt - 1]['num'].$mycol7[$mycol7cnt - 1]['mark'] . "' id='mycol007'>";
                                    echo "<label for='mycol007'>";
                                    echo "<img src='../cards/" . $mycol7[$mycol7cnt - 1]['mark'].$mycol7[$mycol7cnt - 1]['num'] . ".png'>";
                                    echo "</label>";    
                                    echo "</div>";
                                }
                            } else {
                                for($i=1;$i<$inicol7cnt + 1;$i++){
                                    echo "<div class='row-" . $i . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol7cnt == 1){
                                    echo "<div class='row-" . ($inicol7cnt + 1) . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol007" .$mycol7[0]['num'].$mycol7[0]['mark'] . "' id='mycol0070'>";
                                    echo "<label for='mycol0070'>";
                                    echo "<img src='../cards/" . $mycol7[0]['mark'].$mycol7[0]['num'] . ".png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    for($i=1;$i<$mycol7cnt;$i++){
                                        echo "<div class='row-" . ($inicol7cnt + $i) . "'>";
                                        echo "<img src='../cards/" . $mycol7[$i - 1]['mark'].$mycol7[$i - 1]['num'] . ".png'>";
                                        echo "</div>";
                                    }
                                    echo "<div class='row-" . ($inicol7cnt + $mycol7cnt) . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol007" .$mycol7[$mycol7cnt - 1]['num'].$mycol7[$mycol7cnt - 1]['mark'] . "' id='mycol0070'>";
                                    echo "<label for='mycol0070'>";
                                    echo "<img src='../cards/" . $mycol7[$mycol7cnt - 1]['mark'].$mycol7[$mycol7cnt - 1]['num'] . ".png'>";
                                    echo "</label>";
                                    echo "</div>";
                                }
                            }
                        } else {
                            if($inicol7cnt == 0){
                                if($mycol7cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</div>";
                                } else {
                                    for($i=0;$i<$mycol7cnt;$i++){
                                        echo "<div class='row-" . ($i+1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol007" . $i . "__" . $mycol7[$i]['num'].$mycol7[$i]['mark'] . "' id='mycol007" . $i . "'>";
                                        echo "<label for='mycol007" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol7[$i]['mark'].$mycol7[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            } else {
                                for($i=0;$i<$inicol7cnt;$i++){
                                    echo "<div class='row-" . ($i+1) . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol7cnt > 0){
                                    for($i=0;$i<$mycol7cnt;$i++){
                                        echo "<div class='row-" . ($inicol7cnt + $i + 1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol007" . $i . "__" . $mycol7[$i]['num'].$mycol7[$i]['mark'] . "' id='mycol007" . $i . "'>";
                                        echo "<label for='mycol007" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol7[$i]['mark'].$mycol7[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        }
?>