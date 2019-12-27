<?php
include_once('model/mvc.php');
$comments = template('view/viewListTascks.php');
// $a = template('view/view_listnews.php', ['comments' => $comments]);

$html = template('view/view_main.php', [
    'title' => 'Главная страница',
    'content' => $comments
    // 'content2' => $rf
]);
echo $html;