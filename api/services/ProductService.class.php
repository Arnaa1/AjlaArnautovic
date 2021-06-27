<?php
require_once dirname(__FILE__) . './BaseService.class.php';
require_once dirname(__FILE__) . '/../dao/ProductsDao.class.php';
require_once dirname(__FILE__) . '/../dao/BaseDao.class.php';

class ProductService extends BaseService
{
    public function __construct()
    {
        $this->dao = new ProductDao();
    }

    public function get_products($search, $offset, $limit)
    {
        if ($search) {
            return $this->dao->get_products($search, $offset, $limit);
        } else {
            return $this->dao->get_all_products($offset, $limit);
        }
    }

    public function add_products($products)
    {
        if (!isset($products['name'])) {
            throw new Exception('Name is missing');
        }

        return parent::add_products($products);
    }
}
