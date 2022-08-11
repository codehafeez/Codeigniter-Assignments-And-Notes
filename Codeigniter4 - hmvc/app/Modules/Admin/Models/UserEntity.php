<?php namespace App\Modules\Admin\Models;
class UserEntity
{
    protected $id;
    protected $name;
    public function __construct() {

    }

    public static function of($uid, $uname)
    {
        $user = new UserEntity();
        $user->setId($uid);
        $user->setName($uname);
        return $user;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }
}