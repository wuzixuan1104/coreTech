<?php defined('MAPLE') || exit('此檔案不允許讀取！');

class Shop extends SitePageController {
  public $rightMenu;
  private $obj;

  public function __construct() {
    parent::__construct();

    wtfTo('ShopIndex');

    if (in_array(Router::methodName(), ['index', 'rank', 'search'])) {
      $this->rightMenu = View::create('site/Part/rightmenu.php')->with('get', $_GET);
    }

    if (in_array(Router::methodName(), ['show']))
      ($this->obj = \M\ShopMain::one('id = ?', Router::params('id'))) || error('找不到資料！');


  }

  public function index() {
    $asset = $this->asset->addCSS('/asset/css/site/ranking.css');
    $navs = [['name' => '首頁', 'href' => '/'], ['name' => '美食排行榜']];

    $total = \M\ShopMain::count();
    $pagesStr = Pagination::info($total, 20, 2);

    $objs  = \M\ShopMain::all([
     'offset' => $pagesStr['offset'],
     'limit'  => $pagesStr['limit']
    ]);

    return $this->view->setPath('site/Main/ranking.php')
                      ->with('asset', $asset)
                      ->with('rightMenu', $this->rightMenu)
                      ->with('pagesStr', $pagesStr['links'])
                      ->with('objs', $objs)
                      ->with('navs', $navs)
                      ->with('title', '美食排行榜')
                      ->with('hr', '美食排行榜');
  }

  public function search() {
    $asset = $this->asset->addCSS('/asset/css/site/search.css');
    $navs = [['name' => '首頁', 'href' => '/'], ['name' => '美食查詢結果']];

    $total = \M\ShopMain::count();
    $pagesStr = Pagination::info($total, 20, 2);

    $objs  = \M\ShopMain::all([
     'offset' => $pagesStr['offset'],
     'limit'  => $pagesStr['limit']
    ]);

    return $this->view->setPath('site/Main/search.php')
                      ->with('asset', $asset)
                      ->with('rightMenu', $this->rightMenu)
                      ->with('pagesStr', $pagesStr['links'])
                      ->with('navs', $navs)
                      ->with('title', '美食查詢結果')
                      ->with('hr', '美食查詢');
  }

  public function show() {
    $asset = $this->asset->addCSS('/asset/css/site/shoptop.css');
    $navs = [['name' => '首頁', 'href' => '/'], ['name' => $this->obj->areaMain->name, 'href' => ''], ['name' => $this->obj->areaMain->name . '・' . $this->obj->areaSub->name, 'href' => ''], ['name' => $this->obj->name . '-' . $this->obj->areaMain->name . '-']];

    return $this->view->setPath('site/Main/shoptop.php')
                      ->with('asset', $asset)
                      ->with('obj', $this->obj)
                      ->with('navs', $navs)
                      ->with('hr', $this->obj->name . '-' . $this->obj->areaMain->name . ' ' . $this->obj->areaSub->name . '-');
  }

  public function area() {

  }

  public function food() {

  }


 
}
