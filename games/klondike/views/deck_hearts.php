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