<?php
require_once dirname(__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/UsersDao.class.php';
require_once dirname(__FILE__).'/../dao/BaseDao.class.php';


class UserService extends BaseService
{
    public function __construct()
    {
        $this->dao = new UsersDao();
    }

    public function get_users($search, $offset, $limit, $order)
    {
        if ($search) {
            return $this->dao->get_users($search, $offset, $limit, $order);
        } else {
            return $this->dao->get_all_users($offset, $limit, $order);
        }
    }
    

    public function add_users($users)
    {
        if (!isset($users['name'])) {
            throw new Exception('Name is missing', 400);
        }
        return parent::add_users($users);
    }
}
