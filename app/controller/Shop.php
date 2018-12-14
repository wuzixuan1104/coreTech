<?php defined('MAPLE') || exit('此檔案不允許讀取！');

class Shop extends SitePageController {
  public $rightMenu;
  public function __construct() {
    parent::__construct();

    if (in_array(Router::methodName(), ['index', 'rank', 'search'])) {
      $this->rightMenu = View::create('site/Part/rightmenu.php')->with('areas', [1,3,5])->with('foods', [4, 18, 59]);
    }
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
                      ->with('rightMenu', $this->rightMenu)
                      ->with('navs', $navs)
                      ->with('title', '美食排行榜')
                      ->with('hr', '美食排行榜')
                      ->with('asset', $asset)
                      ->with('objs', $objs)
                      ->with('pagesStr', $pagesStr['links']);
  }

  public function search() {

  }

  public function area() {

  }

  public function food() {

  }


 
}
