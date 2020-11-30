<?php
    //手札列３からカードを動かす
    function mycol3shift(
                $holdcardposition, $holdcardindex, $holdnum, $holdmark, $holdcard, 
                $pickcardposition, $pickcardindex, $picknum, $pickmark, $pickcard, 
                $spades, $hearts, $diamonds, $clubs, $mycol3length, $inicol3length,
                $inicol3, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
        ){

        $removekength = $mycol3length - $holdcardindex;

        switch($holdmark){
            case 'spade':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol4[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol4[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol5[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol5[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol4[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol5[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $spades[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $hearts[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $diamonds[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $clubs[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                }
                break;
            case 'club':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol4[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol4[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol5[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol5[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol4[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol5[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $spades[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $hearts[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $diamonds[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $clubs[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                }
                break;
            case 'heart':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol4[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol4[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol5[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol5[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol4[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol5[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $spades[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $hearts[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $diamonds[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $clubs[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                }
                break;
            case 'diamond':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol4[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol4[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol5[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol5[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        } elseif($pickmark == "empty"){
                            $temp = array_slice($mycol3, $holdcardindex);
                            $tempcount = count($temp);
                            for($i=0;$i<$tempcount;$i++){
                                $mycol3[] = array_shift($temp);
                            }
                            for($i=0;$i<$removekength;$i++){
                                unset($mycol3[$i + $holdcardindex]);
                            }
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol4[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol5[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $temp = array_slice($mycol3, $holdcardindex);
                                $tempcount = count($temp);
                                for($i=0;$i<$tempcount;$i++){
                                    $mycol3[] = array_shift($temp);
                                }
                                for($i=0;$i<$removekength;$i++){
                                    unset($mycol3[$i + $holdcardindex]);
                                }
                                if(($inicol3length > 0) && ($mycol3length == 0)){
                                    $mycol3[0] = array_pop($inicol3);
                                    unset($inicol3[$inicol3length - 1]);
                                }
                            }
                        }
                        break;
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $spades[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $hearts[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $diamonds[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $temp = array_slice($mycol3, $holdcardindex, 1);
                            $clubs[] = array_shift($temp);
                            unset($mycol3[$holdcardindex]);
                            if(($inicol3length > 0) && ($mycol3length == 0)){
                                $mycol3[0] = array_pop($inicol3);
                                unset($inicol3[$inicol3length - 1]);
                            }
                        }
                        break;
                }
                break;
        }

        return array($inicol3, $spades, $hearts, $diamonds, $clubs, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7);
    }
?>