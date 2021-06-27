<?php


require_once dirname(__FILE__)."/../dao/BaseDao.class.php";


class BaseService
{
    protected $dao;
    //GET FUNCTIONS
    public function get_users_by_id($id)
    {
        return $this->dao->get_users_by_id($id);
    }
    public function get_products_by_id($id)
    {
        return $this->dao->get_products_by_id($id);
    }
    public function get_faqs_by_id($id)
    {
        return $this->dao->get_faqs_by_id($id);
    }
 
  
    public function get_orders_by_id($id)
    {
        return $this->dao->get_orders_by_id($id);
    }
    public function get_carts_by_id($id)
    {
        return $this->dao->get_carts_by_id($id);
    }
    //POST FUNCTIONS
    public function add_users($data)
    {
        return $this->dao->add_users($data);
    }
    public function add_faqs($data)
    {
        return $this->dao->add_faqs($data);
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
    public function update_users($id, $data)
    {
        $this->dao->update_users($id, $data);
        return $this->dao->get_users_by_id($id);
    }

    public function update_faqs($id, $data)
    {
        $this->dao->update_faqs($id, $data);
        return $this->dao->get_faqs_by_id($id);
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
