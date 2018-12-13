<?php

namespace M;

defined('MAPLE') || exit('此檔案不允許讀取！');

class FoodSub extends Model {
  // static $hasOne = [];

  // static $hasMany = [];

  static $belongToOne = [
    'main' => 'FoodMain'
  ];

  // static $belongToMany = [];

  // static $uploaders = [];
}
