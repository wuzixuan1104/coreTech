<?php

namespace M;

defined('MAPLE') || exit('此檔案不允許讀取！');

class ShopComment extends Model {
  // static $hasOne = [];

  static $hasMany = [
    'replies' => ['model' => 'ShopCommentReply', 'order' => 'createAt DESC']
  ];

  static $belongToOne = [
    'shopMain' => 'ShopMain'
  ];

  // static $belongToMany = [];

  // static $uploaders = [];
}
