<?php defined('MAPLE') || exit('此檔案不允許讀取！');

Router::dir('api', function() {
  Router::post('shop/(id:num)/comment/(commentId:num)/reply')->controller('ShopCommentReply@create');
});
