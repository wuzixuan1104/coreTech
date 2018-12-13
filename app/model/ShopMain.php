<?php

namespace M;

defined('MAPLE') || exit('此檔案不允許讀取！');

class ShopMain extends Model {
  // static $hasOne = [];

  static $hasMany = [
    'photos' => ['model' => 'ShopPhoto', 'order' => 'order ASC'],
    'foodSubs' => ['model' => 'FoodSub', 'order' => 'order ASC']
  ];

  static $belongToOne = [
    'areaMain' => 'AreaMain',
    'areaSub' => 'AreaSub',
    'foodMain' => 'FoodMain'
  ];

  // static $belongToMany = [];

  // static $uploaders = [];
}
