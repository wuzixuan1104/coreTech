<?php defined('MAPLE') || exit('此檔案不允許讀取！');

class ShopCommentReply extends SitePageController {
  private $obj;
  private $commentObj;

  public function __construct() {
    parent::__construct();

    ($this->obj = \M\ShopMain::one('id = ?', Router::params('id'))) || error('找不到資料！');

    if(Router::methodName() == 'create')
      ($this->commentObj = \M\ShopComment::one('id = ?', Router::params('commentId'))) || error('找不到資料！');

  }

  public function create() {
    wtfTo('ShopCommentIndex', $this->obj);

    $params = Input::post();

    validator(function() use (&$params) {
      Validator::need($params, 'name', '姓名')->isVarchar(190);
      Validator::need($params, 'content', '內容')->isText();

      $params['shopCommentId'] = $this->commentObj->id;
    });

    transaction(function() use ($params, &$obj) {
      return ($obj = \M\ShopCommentReply::create($params));
    }); 

    return [
      'id' => $obj->id,
      'name' => $obj->name,
      'content' => $obj->content,
      'createAt' => $obj->createAt->format('Y/m/d H:i'),
    ];
  }
} 