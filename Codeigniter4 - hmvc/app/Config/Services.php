<?php
namespace Config;
use CodeIgniter\Config\BaseService;
class Services extends BaseService
{
    public static function HafeezClassFun($getShared = true){
          if ($getShared) {
              return static::getSharedInstance('HafeezClassFun');
          }
     
          return new \App\Libraries\HafeezTask;
    }
}
