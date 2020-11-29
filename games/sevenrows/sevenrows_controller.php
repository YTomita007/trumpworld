<?php
    //初期設定
    function initialize(){
        //山札を用意する
        $cards = array();
        $marks = array('spade', 'heart', 'diamond', 'club');
    
        foreach($marks as $mark){
            for($i=1;$i<=13;$i++){
                $cards[] = array(
                    'mark' => $mark,
                    'num' => $i,
                );
            }
        }
        shuffle($cards);

        for($i=0;$i<52;$i++){
            if(0<=$i && $i <13){
                $player[] = array_shift($cards);
            }
            if(13<=$i && $i <26){
                $opp1[] = array_shift($cards);
            }
            if(26<=$i && $i <39){
                $opp2[] = array_shift($cards);
            }
            if(39<=$i && $i <52){
                $opp3[] = array_shift($cards);
            }
        }

        for($i=1;$i<=13;$i++){
            $spades[] = array(
                'mark' => '0empty',
                'num' => $i,
            );
            $hearts[] = array(
                'mark' => '0empty',
                'num' => $i,
            );
            $diamonds[] = array(
                'mark' => '0empty',
                'num' => $i,
            );
            $clubs[] = array(
                'mark' => '0empty',
                'num' => $i,
            );
        }

        list($player, $spades, $hearts, $diamonds, $clubs) = setsevens($player, $spades, $hearts, $diamonds, $clubs);
        list($opp1, $spades, $hearts, $diamonds, $clubs) = setsevens($opp1, $spades, $hearts, $diamonds, $clubs);
        list($opp2, $spades, $hearts, $diamonds, $clubs) = setsevens($opp2, $spades, $hearts, $diamonds, $clubs);
        list($opp3, $spades, $hearts, $diamonds, $clubs) = setsevens($opp3, $spades, $hearts, $diamonds, $clubs);
    
        return array($player, $opp1, $opp2, $opp3, $spades, $hearts, $diamonds, $clubs);
    }

    //７だけを配列する（初期設定の一部）
    function setsevens($cards, $spades, $hearts, $diamonds, $clubs){

        $count = 0;

        foreach($cards as $index => $card){
            if($card['num'] == 7){
                switch($card['mark']){
                    case "spade":
                        array_splice($cards, $index - $count, 1);
                        $spades[6] = array('mark' => 'spade', 'num' => '7',);
                        $count ++;
                        break;
                    case "heart":
                        array_splice($cards, $index - $count, 1);
                        $hearts[6] = array('mark' => 'heart', 'num' => '7',);
                        $count ++;
                        break;
                    case "diamond":
                        array_splice($cards, $index - $count, 1);
                        $diamonds[6] = array('mark' => 'diamond', 'num' => '7',);
                        $count ++;
                        break;
                    case "club":
                        array_splice($cards, $index - $count, 1);
                        $clubs[6] = array('mark' => 'club', 'num' => '7',);
                        $count ++;
                        break;
                }
            }
        }

        return array($cards, $spades, $hearts, $diamonds, $clubs);
    }

    //トランプを配置できるかチェックする
    function deploy($cards, $checkcard, $spades, $hearts, $diamonds, $clubs){

        if(is_numeric(substr($checkcard, 0, 2))){
            $deployindex = substr($checkcard, 0, 2);
            if(is_numeric(substr($checkcard, 3, 2))){
                $deploynum = substr($checkcard, 3, 2);
                $deploymark = substr($checkcard, 5);
            } else {
                $deploynum = substr($checkcard, 3, 1);
                $deploymark = substr($checkcard, 4);
            }
        } else {
            $deployindex = substr($checkcard, 0, 1);
            if(is_numeric(substr($checkcard, 2, 2))){
                $deploynum = substr($checkcard, 2, 2);
                $deploymark = substr($checkcard, 4);
            } else {
                $deploynum = substr($checkcard, 2, 1);
                $deploymark = substr($checkcard, 3);
            }
        }

        switch($deploymark){
            case "spade":
                if($deploynum < 7){
                    if($deploynum == $spades[$deploynum - 1]['num'] && $spades[$deploynum]['mark'] == 'spade'){
                        array_splice($cards, $deployindex, 1);
                        $spades[$deploynum - 1] = array('mark' => 'spade', 'num' => $deploynum,);
                        $message = "トランプを配置しました";
                    } else {
                        $message = "トランプを置くことができません。";
                    }
                } elseif($deploynum > 7){
                    if($deploynum == $spades[$deploynum - 1]['num'] && $spades[$deploynum - 2]['mark'] == 'spade'){
                        array_splice($cards, $deployindex, 1);
                        $spades[$deploynum - 1] = array('mark' => 'spade', 'num' => $deploynum,);
                        $message = "トランプを配置しました";
                    } else {
                        $message = "トランプを置くことができません。";
                    }
                }
                break;
            case "heart":
                if($deploynum < 7){
                    if($deploynum == $hearts[$deploynum - 1]['num'] && $hearts[$deploynum]['mark'] == 'heart'){
                        array_splice($cards, $deployindex, 1);
                        $hearts[$deploynum - 1] = array('mark' => 'heart', 'num' => $deploynum,);
                        $message = "トランプを配置しました";
                    } else {
                        $message = "トランプを置くことができません。";
                    }
                } elseif($deploynum > 7){
                    if($deploynum == $hearts[$deploynum - 1]['num'] && $hearts[$deploynum - 2]['mark'] == 'heart'){
                        array_splice($cards, $deployindex, 1);
                        $hearts[$deploynum - 1] = array('mark' => 'heart', 'num' => $deploynum,);
                        $message = "トランプを配置しました";
                    } else {
                        $message = "トランプを置くことができません。";
                    }
                }
                break;
            case "diamond":
                if($deploynum < 7){
                    if($deploynum == $diamonds[$deploynum - 1]['num'] && $diamonds[$deploynum]['mark'] == 'diamond'){
                        array_splice($cards, $deployindex, 1);
                        $diamonds[$deploynum - 1] = array('mark' => 'diamond', 'num' => $deploynum,);
                        $message = "トランプを配置しました";
                    } else {
                        $message = "トランプを置くことができません。";
                    }
                } elseif($deploynum > 7){
                    if($deploynum == $diamonds[$deploynum - 1]['num'] && $diamonds[$deploynum - 2]['mark'] == 'diamond'){
                        array_splice($cards, $deployindex, 1);
                        $diamonds[$deploynum - 1] = array('mark' => 'diamond', 'num' => $deploynum,);
                        $message = "トランプを配置しました";
                    } else {
                        $message = "トランプを置くことができません。";
                    }
                }
                break;
            case "club":
                if($deploynum < 7){
                    if($deploynum == $clubs[$deploynum - 1]['num'] && $clubs[$deploynum]['mark'] == 'club'){
                        array_splice($cards, $deployindex, 1);
                        $clubs[$deploynum - 1] = array('mark' => 'club', 'num' => $deploynum,);
                        $message = "トランプを配置しました";
                    } else {
                        $message = "トランプを置くことができません。";
                    }
                } elseif($deploynum > 7){
                    if($deploynum == $clubs[$deploynum - 1]['num'] && $clubs[$deploynum - 2]['mark'] == 'club'){
                        array_splice($cards, $deployindex, 1);
                        $clubs[$deploynum - 1] = array('mark' => 'club', 'num' => $deploynum,);
                        $message = "トランプを配置しました";
                    } else {
                        $message = "トランプを置くことができません。";
                    }
                }
                break;
        }

        return array($cards, $spades, $hearts, $diamonds, $clubs, $message);
    }

    //コンピューターの思考回路
    function opponent($cards, $spades, $hearts, $diamonds, $clubs){

        $flag = false;

        foreach($cards as $index => $card){
            switch($card['mark']){
                case "spade":
                    if($card['num'] < 7){
                        if($card['num'] == $spades[$card['num'] - 1]['num'] && $spades[$card['num']]['mark'] == 'spade'){
                            array_splice($cards, $index, 1);
                            $spades[$card['num'] - 1] = array('mark' => 'spade', 'num' => $card['num'],);
                            $flag = true;
                        }
                    } elseif($card['num'] > 7){
                        if($card['num'] == $spades[$card['num'] - 1]['num'] && $spades[$card['num'] - 2]['mark'] == 'spade'){
                            array_splice($cards, $index, 1);
                            $spades[$card['num'] - 1] = array('mark' => 'spade', 'num' => $card['num'],);
                            $flag = true;
                        }
                    }
                    break;
                case "heart":
                    if($card['num'] < 7){
                        if($card['num'] == $hearts[$card['num'] - 1]['num'] && $hearts[$card['num']]['mark'] == 'heart'){
                            array_splice($cards, $index, 1);
                            $hearts[$card['num'] - 1] = array('mark' => 'heart', 'num' => $card['num'],);
                            $flag = true;
                        }
                    } elseif($card['num'] > 7){
                        if($card['num'] == $hearts[$card['num'] - 1]['num'] && $hearts[$card['num'] - 2]['mark'] == 'heart'){
                            array_splice($cards, $index, 1);
                            $hearts[$card['num'] - 1] = array('mark' => 'heart', 'num' => $card['num'],);
                            $flag = true;
                        }
                    }
                    break;
                case "diamond":
                    if($card['num'] < 7){
                        if($card['num'] == $diamonds[$card['num'] - 1]['num'] && $diamonds[$card['num']]['mark'] == 'diamond'){
                            array_splice($cards, $index, 1);
                            $diamonds[$card['num'] - 1] = array('mark' => 'diamond', 'num' => $card['num'],);
                            $flag = true;
                        }
                    } elseif($card['num'] > 7){
                        if($card['num'] == $diamonds[$card['num'] - 1]['num'] && $diamonds[$card['num'] - 2]['mark'] == 'diamond'){
                            array_splice($cards, $index, 1);
                            $diamonds[$card['num'] - 1] = array('mark' => 'diamond', 'num' => $card['num'],);
                            $flag = true;
                        }
                    }
                    break;
                case "club":
                    if($card['num'] < 7){
                        if($card['num'] == $clubs[$card['num'] - 1]['num'] && $clubs[$card['num']]['mark'] == 'club'){
                            array_splice($cards, $index, 1);
                            $clubs[$card['num'] - 1] = array('mark' => 'club', 'num' => $card['num'],);
                            $flag = true;
                        }
                    } elseif($card['num'] > 7){
                        if($card['num'] == $clubs[$card['num'] - 1]['num'] && $clubs[$card['num'] - 2]['mark'] == 'club'){
                            array_splice($cards, $index, 1);
                            $clubs[$card['num'] - 1] = array('mark' => 'club', 'num' => $card['num'],);
                            $flag = true;
                        }
                    }
                    break;
            }
            if($flag == true){
                $message = "コンピューターはトランプを配置しました。";
                break;
            } else {
                $message = "コンピューターはパスしました。";
            }
        }
        
        return array($cards, $spades, $hearts, $diamonds, $clubs, $message);
    }

    //全部自分だけでプレー
    function selfinitialize(){
        $cards = array();
        $marks = array('spade', 'heart', 'diamond', 'club');
    
        foreach($marks as $mark){
            for($i=1;$i<=13;$i++){
                $cards[] = array(
                    'mark' => $mark,
                    'num' => $i,
                );
            }
        }

        shuffle($cards);

        for($i=1;$i<=13;$i++){
            $spades[] = array(
                'mark' => '0empty',
                'num' => $i,
            );
            $hearts[] = array(
                'mark' => '0empty',
                'num' => $i,
            );
            $diamonds[] = array(
                'mark' => '0empty',
                'num' => $i,
            );
            $clubs[] = array(
                'mark' => '0empty',
                'num' => $i,
            );
        }

        list($cards, $spades, $hearts, $diamonds, $clubs) = setsevens($cards, $spades, $hearts, $diamonds, $clubs);
    
        return array($cards, $spades, $hearts, $diamonds, $clubs);
    }

    //完全に表示するだけのファンクションなので実際には使わない
    function complate(){
        //山札を用意する
        $cards = array();

        $marks = array('spade', 'heart', 'diamond', 'club');
    
        foreach($marks as $mark){
            for($i=1;$i<=13;$i++){
                $cards[] = array(
                    'num' => $i,
                    'mark' => $mark
                );
            }
        }

        for($i=0;$i<52;$i++){
            if(0<=$i && $i <13){
                $spades[] = array_shift($cards);
            }
            if(13<=$i && $i <26){
                $hearts[] = array_shift($cards);
            }
            if(26<=$i && $i <39){
                $diamonds[] = array_shift($cards);
            }
            if(39<=$i && $i <52){
                $clubs[] = array_shift($cards);
            }
        }

        return array($spades, $clubs, $diamonds, $hearts);
    }
?>