<?php

namespace M;

defined('MAPLE') || exit('此檔案不允許讀取！');

class ShopFood extends Model {
  // static $hasOne = [];

  // static $hasMany = [];

  static $belongToOne = [
    'shopMain' => 'ShopMain',
    'foodSub' => 'FoodSub'
  ];

  // static $belongToMany = [];

  // static $uploaders = [];
}
