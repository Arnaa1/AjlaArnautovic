<?php

class ProductsDao extends BaseDao
{
    private $table="product";

    public function get_products_by_id($id)
    {
        return $this->query_unique("SELECT * FROM products, WHERE id=:id", ["id"=>$id]);
    }

    public function get_products_by_name($name)
    {
        return $this->query_unique("SELECT * FROM products, WHERE name=:name", ["name"=>name]);
    }

    public function get_all_products()
    {
        return $this->query("SELECT * FROM products", []);
    }


    public function add_products($entity)
    {
        return $this->insert($this->table, $entity);
    }

    public function update_product($id, $products)
    {
        $this->update("products", $id, $products, "id");
    }
}
