<?php
class AdminProductController{

	private $product_repo;

	public function __construct(){
		$this->product_repo = new ProductRepository();
	}

	public function index(){
		include_once(ROOT_PATH.'views/admin/product/index.php');
	}

	public function add(){
		if(empty($_POST)){
			include_once(ROOT_PATH.'views/admin/product/add.php');
		}
		else{
			$product = $this->_map_posted_data();
			$result_add = $this->product_repo->insert($product);
			if($result_add>0){
				header('location:index.php?page=aproduct&insert=true');
			}
			else{
				header('location:index.php?page=aproduct&insert=false');				
			}
		}
	
	}

	private function _map_posted_data(){

		$product = new Product();

		$product->set_name($_POST['name']);
		$product->set_description($_POST['description']);
		$product->set_sell_price($_POST['sell_price']);
		$product->set_cost_price($_POST['cost_price']);
		$product->set_photo($_POST['photo']);
		$product->set_status($_POST['status']);

		return $product;
	}

	public function edit(){
		if(empty($_POST)){
			include_once(ROOT_PATH.'views/admin/product/edit.php');	
		}
		else{
			$product = $this->_map_posted_data();
			$product->set_id($_POST['id']);

			$result_edit = $this->product_repo->update($product);
			if($result_edit>0){
				header('location:index.php?page=aproduct&update=true');
			}
			else{
				header('location:index.php?page=aproduct&update=false');
			}

		}
	}

	public function delete(){
		if(isset($_GET['id'])){
			$this->product_repo->delete($_GET['id']);
			header('location:index.php?page=aproduct');
		}
	}

}
	$product = new AdminProductController();

	$method = isset($_GET['m'])?$_GET['m']:'';

	switch ($method) {
		case 'add':
			$product->add();
			break;
		
		case 'edit':
			$product->edit();
			break;
		
		case 'delete':
			$product->delete();
			break;
		
		default:
			$product->index();
			break;
	}

?>