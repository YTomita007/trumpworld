<?php
    //山札をめくる
    function deckpass($cards_f, $cards_r){
        $cards_r[] = array_shift($cards_f);

        return array($cards_f, $cards_r);
    }

    //山札を戻す
    function deckturn($cards_f, $cards_r){
        foreach($cards_r as $card){
            $cards_f[] = array(
                'mark' => $card['mark'],
                'num' => $card['num'],
            );
        }

        $cards_r = array();

        return array($cards_f, $cards_r);
    }
    
    //山札からカードを配る
    function deckshift(
            $cards_f, $cards_r, $holdcardposition, $holdnum, $holdmark, $holdcard, 
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
                                $mycol1[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol1[] = array_shift($cards_f);
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol2[] = array_shift($cards_f);
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol3[] = array_shift($cards_f);
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol4[] = array_shift($cards_f);
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol5[] = array_shift($cards_f);
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol6[] = array_shift($cards_f);
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol7[] = array_shift($cards_f);
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $spades[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $hearts[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $diamonds[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $clubs[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                }
                break;
            case 'club':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol1[] = array_shift($cards_f);
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol2[] = array_shift($cards_f);
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol3[] = array_shift($cards_f);
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol4[] = array_shift($cards_f);
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol5[] = array_shift($cards_f);
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol6[] = array_shift($cards_f);
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol7[] = array_shift($cards_f);
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "heart" || $pickmark == "diamond"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $spades[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $hearts[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $diamonds[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $clubs[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                }
                break;
            case 'heart':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol1[] = array_shift($cards_f);
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol2[] = array_shift($cards_f);
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol3[] = array_shift($cards_f);
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol4[] = array_shift($cards_f);
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol5[] = array_shift($cards_f);
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol6[] = array_shift($cards_f);
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol7[] = array_shift($cards_f);
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;    
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $spades[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $hearts[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $diamonds[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $clubs[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                }
                break;
            case 'diamond':
                switch($pickcardposition){
                    case 'col1card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol1[] = array_shift($cards_f);
                        }
                        break;
                    case 'col2card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol2[] = array_shift($cards_f);
                        }
                        break;
                    case 'col3card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol3[] = array_shift($cards_f);
                        }
                        break;
                    case 'col4card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol4[] = array_shift($cards_f);
                        }
                        break;
                    case 'col5card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol5[] = array_shift($cards_f);
                        }
                        break;
                    case 'col6card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol6[] = array_shift($cards_f);
                        }
                        break;
                    case 'col7card':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        } elseif($pickmark == "empty"){
                            $mycol7[] = array_shift($cards_f);
                        }
                        break;
                    case 'mycol001':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol1[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol002':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol2[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol003':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol3[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol004':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol4[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol005':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol5[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol006':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol6[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;
                    case 'mycol007':
                        if($pickmark == "spade" || $pickmark == "club"){
                            if($holdnum == $picknum - 1){
                                $mycol7[] = array_shift($cards_f);
                            } else {

                                $cards_r[] = array_shift($cards_f);
                            }
                        }
                        break;    
                    case '01spades':
                        if($holdnum == $picknum + 1){
                            $spades[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case '02hearts':
                        if($holdnum == $picknum + 1){
                            $hearts[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case 'diamonds':
                        if($holdnum == $picknum + 1){
                            $diamonds[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                    case '004clubs':
                        if($holdnum == $picknum + 1){
                            $clubs[] = array_shift($cards_f);
                        } else {

                            $cards_r[] = array_shift($cards_f);
                        }
                        break;
                }
                break;
        }

        return array($cards_f, $cards_r, $spades, $hearts, $diamonds, $clubs, $mycol1, $mycol2, $mycol3, $mycol4, $mycol5, $mycol6, $mycol7);
    }
?>