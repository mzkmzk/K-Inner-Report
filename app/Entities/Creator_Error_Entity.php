<?php

namespace App\Entities;
/**
 * Created by PhpStorm.
 * User: maizhikun
 * Date: 16/2/28
 * Time: 下午10:42
 */

use K_Laravel_Creator\Entities\Base_Entity;

class Creator_Error_Entity extends Base_Entity{

    public static $entity = [
        "Error" => "错误"
    ];

    public static function get_attribute(){
        $attribute =array();
        $attribute['_id'] = parent::set_attribute("元素ID","string");
        $attribute['class_name'] = parent::set_attribute("类名","string");
        $attribute['url'] = parent::set_attribute("url","string"); 
        $attribute['origin'] = parent::set_attribute("origin","string"); 
        return array_merge(parent::get_attribute(),$attribute);
    }

    
}