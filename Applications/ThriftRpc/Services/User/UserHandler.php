<?php
namespace Services\User;

class UserHandler implements UserIf {
    /**
     * @param int $param
     * @return int
     */
    public function userInt($param){
        return $param;
    }
    /**
     * @param string $param
     * @return string
     */
    public function userString($param){
        return $param;
    }
    /**
     * @param bool $param
     * @return bool
     */
    public function userBoolean($param){
        return $param;
    }
    /**
     */
    public function userVoid(){
        return "返回空";
    }

}
