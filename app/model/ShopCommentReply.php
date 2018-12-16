<?php

namespace M;

defined('MAPLE') || exit('此檔案不允許讀取！');

class ShopCommentReply extends Model {
  // static $hasOne = [];

  // static $hasMany = [];

  static $belongToOne = [
    'comment' => 'ShopComment'
  ];

  // static $belongToMany = [];

  // static $uploaders = [];
}
