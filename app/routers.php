<?php defined('MAPLE') || exit('此檔案不允許讀取！');

Router::get('')->controller('Shop@index');
Router::get('show/(id:num)')->controller('Shop@show');
Router::get('search')->controller('Shop@search');
