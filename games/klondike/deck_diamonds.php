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