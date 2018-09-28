<?php
namespace Services\User;

class UserHandler implements UserIf {
    /**
     * @param int $param
     * @return int
     */
    public function userInt($param){
        return "我要返回整数";
    }
    /**
     * @param string $param
     * @return string
     */
    public function userString($param){
        return false;
    }
    /**
     * @param bool $param
     * @return bool
     */
    public function userBoolean($param){
        return "我要返回布尔值";
    }
    /**
     */
    public function userVoid(){
        return "返回空";
    }

}
