<?php defined('MAPLE') || exit('此檔案不允許讀取！');

abstract class SitePageController extends SiteController {
  
  public function __construct() {
    parent::__construct(func_get_args());

    Load::sysLib('Pagination.php');
    Pagination::$firstClass  = '';
    Pagination::$prevClass   = 'l';
    Pagination::$activeClass = 'a';
    Pagination::$nextClass   = 'r';
    Pagination::$lastClass   = '';
    Pagination::$limitD4 = 20;
    Pagination::$firstText   = '';
    Pagination::$lastText    = '';
    Pagination::$prevText    = '';
    Pagination::$nextText    = '';
  }
}
