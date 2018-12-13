<?php defined('MAPLE') || exit('此檔案不允許讀取！');

Router::get('')->controller('Shop@index');
Router::get('search')->controller('Shop@search');
Router::get('rank')->controller('Shop@rank');
