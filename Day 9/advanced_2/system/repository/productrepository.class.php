<?php

class ProductRepository{

	private $db = null;


	public function __construct(){
		$this->db = new DBConnection();
	}

	public function get_all(){
		$this->db->connect();

		$product_list = array();
		$sql = "SELECT * from tbl_products";
		$result = $this->db->fetchQuery($sql);
		
		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
				$product = new Product();

				$product->set_id($row['id']);
				$product->set_name($row['name']);
				$product->set_description($row['description']);
				$product->set_sell_price($row['sell_price']);
				$product->set_cost_price($row['cost_price']);
				$product->set_photo($row['photo']);
				$product->set_added_date($row['added_date']);
				$product->set_modified_date($row['modified_date']);
				$product->set_status($row['status']);

				array_push($product_list, $product);
			}
		}

		$this->db->close();
		return $product_list;
	}

	public function insert($product){

		$this->db->connect();

		$sql = "INSERT INTO tbl_products(name,description,sell_price,cost_price,photo,status) VALUES(?,?,?,?,?,?)";
		$stmt = $this->db->initStatement($sql);
		$name = $product->get_name();
		$description = $product->get_description();
		$sell_price = $product->get_sell_price();
		$cost_price = $product->get_cost_price();
		$photo = $product->get_photo();
		$status = $product->get_status();

		$stmt->bind_param("ssddsi",$name,$description,$sell_price,$cost_price,$photo,$status);
		$result = $stmt->execute();
		$this->db->close();
		return $result;

	}

	public function update($product){

		$this->db->connect();

		$sql = "UPDATE tbl_products set name=?,description=?,sell_price=?,cost_price=?,photo=?,modified_date=?,status=? WHERE id=?";
		$stmt = $this->db->initStatement($sql);
		
		$name = $product->get_name();
		$description = $product->get_description();
		$sell_price = $product->get_sell_price();
		$cost_price = $product->get_cost_price();
		$photo = $product->get_photo();
		$modified_date = date('Y-m-s H:i:s');
		$status = $product->get_status();
		$id = $product->get_id();

		$stmt->bind_param("ssddssii",$name,$description,$sell_price,$cost_price,$photo,$modified_date,$status,$id);
		$result = $stmt->execute();
		$this->db->close();
		return $result;

	}

	public function delete($id){
		$this->db->connect();

		$sql = "DELETE from tbl_products WHERE id=?";
		$stmt = $this->db->initStatement($sql);

		$stmt->bind_param("i",$id);
		$result = $stmt->execute();
		
		$this->db->close();
		return $result;
	}

	public function get_by_id($id){

		$this->db->connect();
		$sql = "SELECT id,name,description,sell_price,cost_price,photo,status from tbl_products WHERE id=?";
		$stmt = $this->db->initStatement($sql);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->bind_result($id,$name,$description,$sell_price,$cost_price,$photo,$status);

		while($stmt->fetch()){
			$product = new Product();

			$product->set_id($id);
			$product->set_name($name);
			$product->set_description($description);
			$product->set_sell_price($sell_price);
			$product->set_cost_price($cost_price);
			$product->set_photo($photo);
			$product->set_status($status);

		}

		$this->db->close();
		return $product;
	}

}