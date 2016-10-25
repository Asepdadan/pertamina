<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_model extends CI_Model { 
	
	var $table = 'customers';
	var $column = array(
		'customerNumber', 
		'customerName', 
		'contactLastName', 
		'contactFirstName', 
		'phone',   
		'addressLine1', 
		'addressLine2', 
		'city', 
		'state', 
		'postalCode', 
		'country', 
		'salesRepEmployeeNumber', 
		'creditLimit', 
	);
	var $order = array('customerNumber' => 'asc');

	public function __construct()
	{
			// Call the CI_Model constructor
			parent::__construct();  
	}
	
	private function _get_datatables_query()
	{ 	
		$this->db->select(
			'customers.customerNumber,
			 customers.customerName,
			 customers.contactLastName,
			 customers.contactFirstName,
			 customers.phone,
			(select lastname from employees where employees.employeeNumber = 1002) as employee_name,
			 customers.addressLine1,
			 customers.addressLine2,
			 customers.city,
			 customers.state,
			 customers.postalCode,
			 customers.country,
			 customers.salesRepEmployeeNumber,
			 customers.creditLimit'
		);
		
		$this->db->from('customers');
		$i = 0;
	
		foreach ($this->column as $item) 
		{
			if(isset($_POST['search']['value']))
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
			$i++;
		}
		
		$this->db->order_by('customerNumber', 'ASC');
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if(isset($_POST['length']))
		{					
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		
		//Perubahan Filterisasi
		$result = array();
		foreach($query->result() as $val){
//			if($val->NA == $_SESSION['sajp_flag']){
				$result[] = $val;
//			}
		}
		
		//return $query->result();
		return $result;
		//Perubahan Filterisasi
	}

	function count_filtered()
	{
		$this->_get_datatables_query(); 
		$query = $this->db->get();
		$count = 0;
		foreach($query->result() as $val){
                    $count++;	
		}
		return $count;
	}
	function count_filtered_old()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->_get_datatables_query(); 
		$query = $this->db->get();
		$count = 0;
		foreach($query->result() as $val){
                    $count++;
		}
		return $count;
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('customerNumber',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('customerNumber', $id);
		$this->db->delete($this->table);
	} 
}
