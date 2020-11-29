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