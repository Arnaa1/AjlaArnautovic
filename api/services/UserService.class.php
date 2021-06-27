<?php
require_once dirname(__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/UserDao.class.php';


class UserService extends BaseService
{
    public function __construct()
    {
        $this->dao = new UserDao();
    }

    public function get_users($search, $offset, $limit, $order)
    {
        if ($search) {
            return $this->dao->get_users($search, $offset, $limit, $order);
        } else {
            return $this->dao->get_all_users($offset, $limit, $order);
        }
    }
    

    public function add_user($user)
    {
        if (!isset($user['name'])) {
            throw new Exception('Name is missing', 400);
        }
        return parent::add_user($user);
    }
}
