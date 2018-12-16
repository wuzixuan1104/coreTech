<?php defined('MAPLE') || exit('此檔案不允許讀取！');

Router::file('api.php')   || gg('載入 Router「api.php」失敗！');

Router::get('')->controller('Shop@index');
Router::get('shops')->controller('Shop@index');
Router::get('shops/search')->controller('Shop@search');
Router::get('shop/(id:num)/show')->controller('Shop@show');
Router::get('shop/(id:num)/comment')->controller('ShopComment@index');
Router::post('shop/(id:num)/comment')->controller('ShopComment@create');
// Router::post('shop/(id:num)/comment/(commentId:num)/reply')->controller('api/ShopCommentReply@create');
