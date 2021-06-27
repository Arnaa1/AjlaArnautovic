<?php
require_once dirname(__FILE__)."/BaseDao.class.php";

class CartsDao extends BaseDao
{
    public function get_cart_by_id($id)
    {
        return $this->query_unique("SELECT * FROM cart, WHERE id=:id", ["id=>$id"]);
    }


    public function get_cart_by_name($name)
    {
        return $this->query_unique("SELECT * FROM cart, WHERE name=:name", ["name"=>name]);
    }

    public function get_all_cart()
    {
        return $this->query("SELECT * FROM cart", []);
    }
}
