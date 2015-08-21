<?php

class Product{

	private $id;
	private $name;
	private $description;
	private $sell_price;
	private $cost_price;
	private $photo;
	private $added_date;
	private $modified_date;
	private $status;

	public function __construct(){

	}

	public function get_id(){
		return $this->id;
	}

	public function set_id($id){
		$this->id = $id;
	}

	public function get_name(){
		return $this->name;
	}

	public function set_name($name){
		$this->name = $name;
	}

	public function get_description(){
		return $this->description;
	}

	public function set_description($description){
		$this->description = $description;
	}

	public function get_sell_price(){
		return $this->sell_price;
	}

	public function set_sell_price($sell_price){
		$this->sell_price = $sell_price;
	}

	public function get_cost_price(){
		return $this->cost_price;
	}

	public function set_cost_price($cost_price){
		$this->cost_price = $cost_price;
	}

	public function get_photo(){
		return $this->photo;
	}

	public function set_photo($photo){
		$this->photo = $photo;
	}

	public function get_added_date(){
		return $this->added_date;
	}

	public function set_added_date($added_date){
		$this->added_date = $added_date;
	}

	public function get_modified_date(){
		return $this->modified_date;
	}

	public function set_modified_date($modified_date){
		$this->modified_date = $modified_date;
	}

	public function get_status(){
		return $this->status;
	}

	public function set_status($status){
		$this->status = $status;
	}

}