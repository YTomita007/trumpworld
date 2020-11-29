<?php
    //列１からカードを動かす
    function clubsshift(
            $holdcardposition, $holdnum, $holdmark, $holdcard, 
            $pickcardposition, $picknum, $pickmark, $pickcard, 
            $spades, $hearts, $diamonds, $clubs,
            $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7
        ){

        switch($holdmark){
            case 'spade':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol1[] = array_shift($clubs);
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol2[] = array_shift($clubs);
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol3[] = array_shift($clubs);
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol4[] = array_shift($clubs);
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol5[] = array_shift($clubs);
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol6[] = array_shift($clubs);
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol7[] = array_shift($clubs);
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($clubs);
                            }
                        }
                        break;
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $spades[] = array_shift($clubs);
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $hearts[] = array_shift($clubs);
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $diamonds[] = array_shift($clubs);
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $clubs[] = array_shift($clubs);
                        }
                        break;
                }
                break;
            case 'club':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol1[] = array_shift($clubs);
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol2[] = array_shift($clubs);
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol3[] = array_shift($clubs);
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol4[] = array_shift($clubs);
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol5[] = array_shift($clubs);
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol6[] = array_shift($clubs);
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol7[] = array_shift($clubs);
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($clubs);
                            }
                        }
                        break;
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $spades[] = array_shift($clubs);
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $hearts[] = array_shift($clubs);
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $diamonds[] = array_shift($clubs);
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $clubs[] = array_shift($clubs);
                        }
                        break;
                }
                break;
            case 'heart':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol1[] = array_shift($clubs);
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol2[] = array_shift($clubs);
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol3[] = array_shift($clubs);
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol4[] = array_shift($clubs);
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol5[] = array_shift($clubs);
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol6[] = array_shift($clubs);
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol7[] = array_shift($clubs);
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($clubs);
                            }
                        }
                        break;    
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $spades[] = array_shift($clubs);
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $hearts[] = array_shift($clubs);
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $diamonds[] = array_shift($clubs);
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $clubs[] = array_shift($clubs);
                        }
                        break;
                }
                break;
            case 'diamond':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol1[] = array_shift($clubs);
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol2[] = array_shift($clubs);
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol3[] = array_shift($clubs);
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol4[] = array_shift($clubs);
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol5[] = array_shift($clubs);
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol6[] = array_shift($clubs);
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($clubs);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol7[] = array_shift($clubs);
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($clubs);
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($clubs);
                            }
                        }
                        break;    
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $spades[] = array_shift($clubs);
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $hearts[] = array_shift($clubs);
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $diamonds[] = array_shift($clubs);
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $clubs[] = array_shift($clubs);
                        }
                        break;
                }
                break;
        }

        return array($spades, $hearts, $diamonds, $clubs, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7);
    }
?>