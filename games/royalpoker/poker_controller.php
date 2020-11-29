<?php
    const ROYAL          = "Royal Straight Flash";
    const STRAIGHT_FLASH = "Straight Flash";
    const FOUR           = "Four Cards";
    const FULL_HOUSE     = "Full House";
    const FLASH          = "Flash";
    const STRAIGHT       = "Straight";
    const THREE          = "Three Cards";
    const TWO            = "Two Pairs";
    const NO_PAIR        = "Non Award";

    //山札を用意する
    function init_cards(){
        $cards = array();
        $suits = array('spade', 'heart', 'diamond', 'club');
    
        foreach($suits as $suit){
            for($i=1;$i<=13;$i++){
                $cards[] = array(
                    'num' => $i,
                    'suit' => $suit
                );
            }
        }
        shuffle($cards);
        return $cards;
    }

    function judge($cards) {
        if (isRoyal($cards)) {
            return ROYAL;
        }
        if (isStraightFlash($cards)) {
            return STRAIGHT_FLASH;
        }
        if (isFour($cards)) {
            return FOUR;
        }
        if (isFullHouse($cards)) {
            return FULL_HOUSE;
        }
        if (isSameMark($cards)) {
            return FLASH;
        }
        if (isStraight($cards)) {
            return STRAIGHT;
        }
        if (isThree($cards)) {
            return THREE;
        }
        if (isPair($cards)) {
            return TWO;
        }
    
        return NO_PAIR;
    }

    function isRoyal($cards) {
        $royal = array(1, 10, 11, 12 ,13);
        $cardNum = array();
        foreach ($cards as $card) {
            $cardNum[] = $card['num'];
        }
        sort($royal);
        return false;
    }
    
    function isStraightFlash($cards) {
        return (isStraight($cards) && isSameMark($cards));
    }

    function isFour($cards) {
        $state = searchPair($cards);
        rsort($state);
        if (array_shift($state) == 4) {
            return true;
        }
        return false;    
    }
    
    function isFullhouse($cards) {
        $state = searchPair($cards);
        rsort($state);
        if (array_shift($state) == 3 && array_shift($state) == 2) {
            return true;
        }
        return false;
    }

    function isThree($cards) {
        $state = searchPair($cards);
        rsort($state);
        if (array_shift($state) == 3) {
            return true;
        }
        return false;
    }

    function isPair($cards) {
        $state = searchPair($cards);
        rsort($state);
        if (array_shift($state) == 2) {
            if (array_shift($state) == 2) {
                return true;
            }
        }
        return false;
    }
    
    function isSameMark($cards) {
        $state = true;
        $mark = "";
        foreach ($cards as $card) {
            if ($mark !== "" && $mark !== $card['suit']) {
                $state = false;
                break;
            }
            $mark = $card['suit'];
        }

        return $state;
    }
    
    function isStraight($cards) {
        $numbers = array();
        foreach ($cards as $card) {
            $numbers[] = $card['num'];
        }
        $last = 0;
        sort($numbers);
        $state= true;
        foreach ($numbers as $number) {
            if ($last !== 0 && $number-$last != 1) {
                $state = false;
                break;
            }
            $last = $number;
        }

        return $state;
    }
    /**
    * ペアを数え上げる
    * @param Array $cards
    * @return Array 
    */
    function searchPair($cards) {
        $state = array();
        foreach ($cards as $card) {
            if (! isset($state[$card['num']])) {
                $state[$card['num']] = 0;
            }
            $state[$card['num']]++;
        }

        return $state;

    }
?>