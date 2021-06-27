<?php


require_once dirname(__FILE__)."/../dao/BaseDao.class.php";


class BaseService
{
    protected $dao;
    //GET FUNCTIONS
    public function get_user_by_id($id)
    {
        return $this->dao->get_user_by_id($id);
    }
    public function get_products_by_id($id)
    {
        return $this->dao->get_products_by_id($id);
    }
 
  
    public function get_orders_by_id($id)
    {
        return $this->dao->get_orders_by_id($id);
    }
    public function get_shoppingcarts_by_id($id)
    {
        return $this->dao->get_shoppingcarts_by_id($id);
    }
    //POST FUNCTIONS
    public function add_user($data)
    {
        return $this->dao->add_user($data);
    }

    public function add_products($data)
    {
        return $this->dao->add_products($data);
    }

 
    public function add_orders($data)
    {
        return $this->dao->add_orders($data);
    }
    //UPDATE FUNCTIONS
    public function update_user($id, $data)
    {
        $this->dao->update_user($id, $data);
        return $this->dao->get_user_by_id($id);
    }

    public function update_products($id, $data)
    {
        $this->dao->update_products($id, $data);
        return $this->dao->get_products_by_id($id);
    }

 
    public function update_orders($id, $data)
    {
        $this->dao->update_orders($id, $data);
        return $this->dao->get_orders_by_id($id);
    }
}
