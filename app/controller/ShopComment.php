<?php defined('MAPLE') || exit('此檔案不允許讀取！');

class ShopComment extends SitePageController {
  private $obj;

  public function __construct() {
    parent::__construct();

    ($this->obj = \M\ShopMain::one('id = ?', Router::params('id'))) || error('找不到資料！');
  }

  public function index() {
    $asset = $this->asset->addCSS('/asset/css/site/shopcomment.css')
                         ->addJS('/asset/js/site/comment.js');

    $navs = [['name' => '首頁', 'href' => '/'], 
             ['name' => $this->obj->areaMain->name, 'href' => Url::base('shops/search?') . implode('&', array_map(function($sub) { return 'area[]=' . $sub->id; }, $this->obj->areaMain->subs))], 
             ['name' => $this->obj->areaMain->name . '・' . $this->obj->areaSub->name, 'href' => Url::base('shops/search?area[]=' . $this->obj->areaSub->id)], 
             ['name' => $this->obj->name . '-' . $this->obj->areaMain->name . '-']];

    $where = Where::create(['shopMainId = ?', $this->obj->id]);
    $total = \M\ShopComment::count($where);
    $pagesStr = Pagination::info($total, 10, 2);

    $commentObjs  = \M\ShopComment::all([
     'order' => 'createAt DESC',
     'include' => ['photos', 'foodMain', 'foodSubs'],
     'offset' => $pagesStr['offset'],
     'limit'  => $pagesStr['limit'],
     'where' => $where
    ]);

    return $this->view->setPath('site/Main/shopcomment.php')
                      ->with('asset', $asset)
                      ->with('pagesStr', $pagesStr['links'])
                      ->with('obj', $this->obj)
                      ->with('commentObjs', $commentObjs)
                      ->with('title', '美食評論')
                      ->with('navs', $navs)
                      ->with('hr', $this->obj->name . '-' . $this->obj->areaMain->name . ' ' . $this->obj->areaSub->name . '-');
  }

  public function create() {
    wtfTo('ShopCommentIndex', $this->obj);

    $params = Input::post();

    validator(function() use (&$params) {
      Validator::need($params, 'name', '姓名')->isVarchar(190);
      Validator::need($params, 'score', '分數')->isNumber();
      Validator::need($params, 'title', '標題')->isVarchar(190);
      Validator::need($params, 'content', '內容')->isText();

      $params['shopMainId'] = $this->obj->id;
    });

    transaction(function() use ($params) {
      return \M\ShopComment::create($params);
    }); 

    Url::refreshWithSuccessFlash(Url::toRouter('ShopCommentIndex', $this->obj), '新增成功！');
  }
}
