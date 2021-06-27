<?php
require_once dirname(__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/FAQDao.class.php';

class FaqService extends BaseService
{
    public function __construct()
    {
        $this->dao = new FAQDao();
    }

    public function get_faqs($search, $offset, $limit, $order)
    {
        if ($search) {
            return $this->dao->get_faqs($search, $offset, $limit, $order);
        } else {
            return $this->dao->get_all_faqs($offset, $limit, $order);
        }
    }
    public function add_faqs($faqs)
    {
        if (!isset($faqs['body'])) {
            throw new Exception('Body is missing');
        }

        return parent::add_faqs($faqs);
    }
}
