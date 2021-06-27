<?php

require_once dirname(__FILE__)."/BaseDao.class.php";
class OrdersDao extends BaseDao
{
    public function get_orders_by_id($id)
    {
        return $this->query_unique("SELECT * FROM orders, WHERE id=:id", ["id=>$id"]);
    }


    public function get_orders_by_name($name)
    {
        return $this->query_unique("SELECT * FROM orders, WHERE name=:name", ["name"=>name]);
    }

    public function get_all_orders()
    {
        return $this->query("SELECT * FROM orders", []);
    }
}
