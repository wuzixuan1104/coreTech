<?php

namespace M;

defined('MAPLE') || exit('此檔案不允許讀取！');

class ShopMain extends Model {
  static $hasOne = [
    'photo' => 'ShopPhoto'
  ];

  static $hasMany = [
    'photos' => ['model' => 'ShopPhoto', 'order' => 'order ASC'],
    'shopFoods' => 'ShopFood',
    'foodSubs' => ['model' => 'FoodSub', 'by' => 'shopFood', 'order' => 'order ASC'],
    'comments' => ['model' => 'ShopComment', 'order' => 'createAt DESC']
  ];

  static $belongToOne = [
    'areaMain' => 'AreaMain',
    'areaSub' => 'AreaSub',
    'foodMain' => 'FoodMain'
  ];

  // static $belongToMany = [];

  // static $uploaders = [];
}
