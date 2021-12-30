<?php
    class Home extends  MasterModel {
        public function get_all_product(){
            $sql="SELECT * FROM products ";
            $listProduct = MasterModel::get_all_row($sql);
            return $listProduct;
        }

        public function get_one_product($id){
            $sql = "SELECT * FROM products where product_id= $id";
            $listProduct = MasterModel::get_one_row($sql);
            return $listProduct;
        }
    }