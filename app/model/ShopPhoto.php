<?php

namespace M;

defined('MAPLE') || exit('此檔案不允許讀取！');

class ShopPhoto extends Model {
  // static $hasOne = [];

  // static $hasMany = [];

  static $belongToOne = [
    'shopMain' => 'ShopMain'
  ];

  // static $belongToMany = [];

  // static $uploaders = [];
}
