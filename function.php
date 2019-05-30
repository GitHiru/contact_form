<?php
//▼使い回す関数を書いておく
function h($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
