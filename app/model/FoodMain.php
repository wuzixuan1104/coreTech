<?php

namespace M;

defined('MAPLE') || exit('此檔案不允許讀取！');

class FoodMain extends Model {
  // static $hasOne = [];

  static $hasMany = [
    'subs' => ['model' => 'FoodSub', 'order' => 'order ASC']
  ];

  // static $belongToOne = [];

  // static $belongToMany = [];

  // static $uploaders = [];
}
