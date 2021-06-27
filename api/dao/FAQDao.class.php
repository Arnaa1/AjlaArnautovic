<?php

require_once dirname(__FILE__)."/BaseDao.class.php";
class FAQDao extends BaseDao
{
    public function get_faqs_by_id($id)
    {
        return $this->query_unique("SELECT * FROM faqs, WHERE id=:id", ["id=>$id"]);
    }

    public function get_all_faqs()
    {
        return $this->query("SELECT * FROM faqs", []);
    }
}
