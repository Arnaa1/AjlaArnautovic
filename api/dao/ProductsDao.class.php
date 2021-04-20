<?php

class ProductsDao extends BaseDao{

  private $table="product";

    public function get_product_by_id($id){
      return $this->query_unique("SELECT * FROM products, WHERE id=:id", ["id"=>$id]);
    }

    public function get_product_by_name($name){
      return $this->query_unique("SELECT * FROM products, WHERE name=:name", ["name"=>name]);
    }

    public function get_all_products(){
      return $this->query ("SELECT * FROM products", []);
    }


  public function add_product($entity){
  return $this->insert($this->table, $entity);
  }

  public function update_product($id, $product){
    $this->update("product", $id, $product, "id");
  }

  
}
?>
