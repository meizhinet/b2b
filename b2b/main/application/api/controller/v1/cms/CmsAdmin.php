<?php


namespace app\api\controller\v1\cms;


use app\api\model\GlAdmin;

class CmsAdmin
{
  public function allAdmin(){

    $result = GlAdmin::all();
    return $result;
  }
}