<?php
    $gamemode = $_POST['playmode'];

    if($gamemode == 'blackjack'){
        header('Location: ./games/blackjack/index.php', true, 307);
    } elseif($gamemode == 'royalpoker') {
        header('Location: ./games/royalpoker/index.php', true, 307);
    } elseif($gamemode == 'memorygame') {
        header('Location: ./games/memorygame/index.php', true, 307);
    }
?>