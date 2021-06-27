<?php
require_once dirname(__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/OrdersDao.class.php';

class OrderService extends BaseService
{
    public function __construct()
    {
        $this->dao = new OrderDao();
    }

    public function get_orders($search, $offset, $limit, $order)
    {
        if ($search) {
            return $this->dao->get_orders($search, $offset, $limit, $order);
        } else {
            return $this->dao->get_all_orders($offset, $limit, $order);
        }
    }
}
