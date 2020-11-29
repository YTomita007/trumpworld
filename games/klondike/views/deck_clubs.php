<?php
                    if (0 < $clubscnt){
                        echo "<input type='radio' name='pickcard' value='004clubs" . $clubs[$clubscnt - 1]['num'].$clubs[$clubscnt - 1]['mark'] . "' id='004clubs'>";
                        echo "<label for='004clubs'>";
                        echo "<img src='../cards/" . $clubs[$clubscnt - 1]['mark'].$clubs[$clubscnt - 1]['num'] . ".png'>";
                        echo "</label>";
                    } else {
                        if($deployflag == true){
                            echo "<input type='radio' name='pickcard' value='004clubs00club' id='004clubs'>";
                            echo "<label for='004clubs'>";
                            echo "<img src='../cards/00club.png'>";
                            echo "</label>";
                        } else {
                            echo "<img src='../cards/00club.png'>";
                        }
                    }
?>