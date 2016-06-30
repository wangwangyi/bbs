<?php
@$con = mysql_connect("127.0.0.1", "root", "root");
if (!$con) {
    die("无法连接数据库:" . mysql_error());
}

mysql_query("set names utf8");        //设置数据编码
mysql_select_db('bbs');                  //选择数据库