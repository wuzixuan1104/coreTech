<?php defined('MAPLE') || exit('此檔案不允許讀取！');

class Shop extends SiteController {
  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $asset = $this->asset->addCSS('/asset/css/site/search.css');

    return $this->view->setPath('site/Main/search.php')
                      ->with('title', '首頁')
                      ->with('hr', 123)
                      ->with('asset', $asset);
  }

  public function search() {

  }

  public function rank() {

  }
}
