<?php
//连接数据库
require "common.php";


//如果提交了
if ($_POST) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $time = time();
    mysql_query("insert into `article` (`title`, `content`, `time`) values ('$title', '$content', '$time')");
}

//加载html模板
require "templates/index.html";