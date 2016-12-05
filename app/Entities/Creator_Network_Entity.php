<?php

namespace App\Entities;
/**
 * Created by PhpStorm.
 * User: maizhikun
 * Date: 16/2/28
 * Time: 下午10:42
 */

use K_Laravel_Creator\Entities\Base_Entity;


class Creator_Network_Entity extends Base_Entity{

    public static $entity = [
        "Network" => "网络状况"
    ];

    public static function get_attribute(){
        $attribute = array();
        $attribute['duration'] = parent::set_attribute("微信ID","string");
        $attribute['url'] = parent::set_attribute("登陆次数","int");
        $attribute['origin'] = parent::set_attribute("origin","string"); 
        return array_merge(parent::get_attribute(),$attribute);
    }

    
}