<?php
                        if($deployflag == true){
                            if($inicol1cnt == 0){
                                if($mycol1cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<input type='radio' name='pickcard' value='col1card00empty' id='0empty1'>";
                                    echo "<label for='0empty1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    for($i=1;$i<$mycol1cnt;$i++){
                                        echo "<div class='row-" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol1[$i - 1]['mark'].$mycol1[$i - 1]['num'] . ".png'>";
                                        echo "</div>";
                                    }
                                    echo "<div class='row-" . $mycol1cnt . "'>";
                                    echo "<input type='radio' name='pickcard' value='mycol001" . $mycol1cnt . "__" . $mycol1[$mycol1cnt - 1]['num'].$mycol1[$mycol1cnt - 1]['mark'] . "' id='mycol001'>";
                                    echo "<label for='mycol001'>";
                                    echo "<img src='../cards/" . $mycol1[$mycol1cnt - 1]['mark'].$mycol1[$mycol1cnt - 1]['num'] . ".png'>";
                                    echo "</label>";    
                                    echo "</div>";
                                }
                            } else {
                                for($i=1;$i<$inicol1cnt;$i++){
                                    echo "<div class='row-" . $i . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                if($mycol1cnt == 0){
                                    echo "<div class='row-" . $inicol1cnt . "'>";
                                    echo "<input type='radio' name='pickcard' value='col1card" .$inicol1[0]['num'].$inicol1[0]['mark'] . "' id='col1card" . $inicol1cnt . "'>";
                                    echo "<label for='col1card" . $inicol1cnt . "'>";
                                    echo "<img src='../cards/" . $inicol1[0]['mark'].$inicol1[0]['num'] . ".png'>";
                                    echo "</label>";
                                    echo "</div>";
                                } else {
                                    echo "<div class='row-" . $inicol1cnt . "'>";
                                    echo "<img src='../cards/" . $inicol1[0]['mark'].$inicol1[0]['num'] . ".png'>";
                                    echo "</div>";
                                    for($i=0;$i<$mycol1cnt;$i++){
                                        echo "<div class='row-" . ($inicol1cnt + $i + 1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol001" . $i . "__" . $mycol1[$mycol1cnt - 1]['num'].$mycol1[$mycol1cnt - 1]['mark'] . "' id='mycol001" . $i . "'>";
                                        echo "<label for='mycol001" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol1[$i]['mark'].$mycol1[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        } else {
                            if($inicol1cnt == 0){
                                if($mycol1cnt == 0){
                                    echo "<div class='row-1'>";
                                    echo "<img src='../cards/0empty1.png'>";
                                    echo "</div>";
                                } else {
                                    for($i=0;$i<$mycol1cnt;$i++){
                                        echo "<div class='row-" . ($i+1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol001" . $i . "__" . $mycol1[$i]['num'].$mycol1[$i]['mark'] . "' id='mycol001" . $i . "'>";
                                        echo "<label for='mycol001" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol1[$i]['mark'].$mycol1[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            } else {
                                for($i=1;$i<$inicol1cnt;$i++){
                                    echo "<div class='row-" . $i . "'>";
                                    echo "<img src='../cards/backcard.png'>";
                                    echo "</div>";
                                }
                                echo "<div class='row-" . ($inicol1cnt) . "'>";
                                echo "<input type='radio' name='pickcard' value='col1card" . $inicol1[0]['num'].$inicol1[0]['mark'] . "' id='col1card" . $inicol1cnt . "'>";
                                echo "<label for='col1card" . $inicol1cnt . "'>";
                                echo "<img src='../cards/" . $inicol1[0]['mark'].$inicol1[0]['num'] . ".png'>";
                                echo "</label>";
                                echo "</div>";
                                if($mycol1cnt > 0){
                                    for($i=0;$i<$mycol1cnt;$i++){
                                        echo "<div class='row-" . ($inicol1cnt + $i + 1) . "'>";
                                        echo "<input type='radio' name='pickcard' value='mycol001" . $i . "__" . $mycol1[$i]['num'].$mycol1[$i]['mark'] . "' id='mycol001" . $i . "'>";
                                        echo "<label for='mycol001" . $i . "'>";
                                        echo "<img src='../cards/" . $mycol1[$i]['mark'].$mycol1[$i]['num'] . ".png'>";
                                        echo "</label>";    
                                        echo "</div>";
                                    }
                                }
                            }
                        }
?>