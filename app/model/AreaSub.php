<?php

namespace M;

defined('MAPLE') || exit('此檔案不允許讀取！');

class AreaSub extends Model {
  // static $hasOne = [];

  // static $hasMany = [];

  static $belongToOne = [
    'main' => 'AreaMain'
  ];

  // static $belongToMany = [];

  // static $uploaders = [];
}
