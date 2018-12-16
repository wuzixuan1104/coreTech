<?php defined('MAPLE') || exit('此檔案不允許讀取！');

class Shop extends SitePageController {
  private $rightMenu;
  private $obj;

  public function __construct() {
    parent::__construct();

    wtfTo('ShopIndex');

    if (in_array(Router::methodName(), ['index', 'search'])) {
      $this->rightMenu = View::create('site/Part/rightmenu.php')->with('get', Input::get());
    }
    if (Router::methodName() == 'show')
      ($this->obj = \M\ShopMain::one('id = ?', Router::params('id'))) || error('找不到資料！');
  }

  public function index() {
    $asset = $this->asset->addCSS('/asset/css/site/ranking.css');
    $navs = [['name' => '首頁', 'href' => Url::base('shops')], ['name' => '美食排行榜']];

    $total = \M\ShopMain::count();
    $pagesStr = Pagination::info($total, 20, 2);

    $objs  = \M\ShopMain::all([
     'order' => 'id DESC',
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
    $where = Where::create();
    $areaNav = null;
    $h2 = '';

    $gets = Input::get();
    if (isset($gets['area']) && $gets['area']) {
      $where->and('areaSubId IN (?)', $gets['area']);

      if (count($gets['area']) == 1 && $areaSub = \M\AreaSub::one('id = ?', $gets['area'][0])) {
        $h2 .= $areaSub->main->name . '/' . $areaSub->name;
        $areaNav = ['name' => $areaSub->main->name, 'href' => Url::base('shops/search?') . implode('&', array_map(function($sub) { return 'area[]=' . $sub->id; }, $areaSub->main->subs))];
      }
    }
    if (isset($gets['food']) && $gets['food']) {
      $shopFoods = \M\ShopFood::all('foodSubId IN (?)', $gets['food']);
      $where->and('id IN (?)', arrayColumn($shopFoods, 'id') );

      if (($foodCnt = count($gets['food']) == 1) && $foodSub = \M\FoodSub::one('id = ?', $gets['food'][0])) {
        $h2 = ($h2 ? $h2 . '/' : '') . $foodSub->main->name . '/' . $foodSub->name;
      } elseif ($foodCnt > 1) {
        $h2 = '';
      }
    } 

    $total = \M\ShopMain::count($where);
    $pagesStr = Pagination::info($total, 20, 2);

    $objs  = \M\ShopMain::all([
     'order' => 'createAt DESC',
     'offset' => $pagesStr['offset'],
     'limit'  => $pagesStr['limit'],
     'where' => $where
    ]);

    $asset = $this->asset->addCSS('/asset/css/site/search.css');

    $navs = [['name' => '首頁', 'href' => Url::base('shops')]];
    $areaNav !== null && array_push($navs, $areaNav);
    array_push($navs, ['name' => '美食查詢結果']);

    return $this->view->setPath('site/Main/search.php')
                      ->with('asset', $asset)
                      ->with('rightMenu', $this->rightMenu)
                      ->with('pagesStr', $pagesStr['links'])
                      ->with('objs', $objs)
                      ->with('navs', $navs)
                      ->with('title', '美食查詢結果')
                      ->with('h2', $h2 ? $h2 . ' 查詢結果' : '美食查詢結果')
                      ->with('hr', $h2 ? $h2 . ' 美食查詢' : '美食查詢結果');
  }

  public function show() {
    $asset = $this->asset->addCSS('/asset/css/site/shoptop.css');
    $navs = [['name' => '首頁', 'href' => '/'], 
             ['name' => $this->obj->areaMain->name, 'href' => Url::base('shops/search?') . implode('&', array_map(function($sub) { return 'area[]=' . $sub->id; }, $this->obj->areaMain->subs))], 
             ['name' => $this->obj->areaMain->name . '・' . $this->obj->areaSub->name, 'href' => Url::base('shops/search?area[]=' . $this->obj->areaSub->id)], 
             ['name' => $this->obj->name . '-' . $this->obj->areaMain->name . '-']];

    return $this->view->setPath('site/Main/shoptop.php')
                      ->with('asset', $asset)
                      ->with('obj', $this->obj)
                      ->with('navs', $navs)
                      ->with('hr', $this->obj->name . '-' . $this->obj->areaMain->name . ' ' . $this->obj->areaSub->name . '-');
  }
}
