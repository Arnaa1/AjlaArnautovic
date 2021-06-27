<?php
require_once dirname(__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/CartDao.class.php';

class CartService extends BaseService
{
    public function __construct()
    {
        $this->dao = new CartDao();
    }

    public function get_cart($search, $offset, $limit, $order)
    {
        if ($search) {
            return $this->dao->get_cart($search, $offset, $limit, $order);
        } else {
            return $this->dao->get_all_cart($offset, $limit, $order);
        }
    }
}
