<?php

class Requests extends Basic
{

    public $new_schema = true;
    public $module_dir = 'Requests';
    public $object_name = 'Requests';
    public $table_name = 'requests';
    public $importable = true;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $user_favorites;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $following;
    public $following_link;
    public $my_favorite;
    public $favorite_link;
    public $status;
    public $type;

    public function __construct()
    {
        parent::__construct();
    }

    public function bean_implements($interface)
    {
        if ("ACL" === $interface) {
            return true;
        } else {
            return false;
        }
    }

}
