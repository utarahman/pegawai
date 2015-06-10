<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class User_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	function get($params = array()) {
		if (isset ( $params ['id'] )) {
			$this->db->where ( 'user_id', $params ['id'] );
		}
		
		if (isset ( $params ['limit'] )) {
			if (! isset ( $params ['offset'] )) {
				$params ['offset'] = NULL;
			}
			
			$this->db->limit ( $params ['limit'], $params ['offset'] );
		}
		
		if (isset ( $params ['order_by'] )) {
			$this->db->order_by ( $params ['order_by'], 'desc' );
		} else {
			$this->db->order_by ( 'user_last_update', 'desc' );
		}
		
		$this->db->select ( '*' );
		$res = $this->db->get ( 'user' );
		
		if (isset ( $params ['id'] )) {
			return $res->row_array ();
		} else {
			return $res->result_array ();
		}
	}
	function add($data = array()) {
		if (isset ( $data ['user_id'] )) {
			$this->db->set ( 'user_id', $data ['user_id'] );
		}
		
		if (isset ( $data ['user_name'] )) {
			$this->db->set ( 'user_name', $data ['user_name'] );
		}
		
		if (isset ( $data ['user_full_name'] )) {
			$this->db->set ( 'user_full_name', $data ['user_full_name'] );
		}
		
		if (isset ( $data ['user_password'] )) {
			$this->db->set ( 'user_password', $data ['user_password'] );
		}
		
		if (isset ( $data ['user_address'] )) {
			$this->db->set ( 'user_address', $data ['user_address'] );
		}
		
		if (isset ( $data ['user_image'] )) {
			$this->db->set ( 'user_image', $data ['user_image'] );
		}
		
		if (isset ( $data ['user_date_created'] )) {
			$this->db->set ( 'user_date_created', $data ['user_date_created'] );
		}
		
		if (isset ( $data ['user_last_update'] )) {
			$this->db->set ( 'user_last_update', $data ['user_last_update'] );
		}
		
		if (isset ( $data ['category_id'] )) {
			$this->db->set ( 'category_id', $data ['category_id'] );
		}
		
		if (isset ( $data ['user_id'] )) {
			$this->db->where ( 'user_id', $data ['user_id'] );
			$this->db->update ( 'user' );
			$id = $data ['user_id'];
		} else {
			$this->db->insert ( 'user' );
			$id = $this->db->insert_id ();
		}
		
		$status = $this->db->affected_rows ();
		return ($status == 0) ? FALSE : $id;
	}
	function category_get($params = array()) {
		if (isset ( $params ['id'] )) {
			$this->db->where ( 'category_id', $params ['id'] );
		}
		
		if (isset ( $params ['limit'] )) {
			if (! isset ( $params ['offset'] )) {
				$params ['offset'] = NULL;
			}
			
			$this->db->limit ( $params ['limit'], $params ['offset'] );
		}
		if (isset ( $params ['order_by'] )) {
			$this->db->order_by ( $params ['order_by'], 'desc' );
		} else {
			$this->db->order_by ( 'category_id', 'desc' );
		}
		
		$this->db->select ( '*' );
		$res = $this->db->get ( 'user_category' );
		
		if (isset ( $params ['id'] )) {
			return $res->row_array ();
		} else {
			return $res->result_array ();
		}
	}
	function category_add($data = array()) {
		if (isset ( $data ['category_id'] )) {
			$this->db->set ( 'category_id', $data ['category_id'] );
		}
		if (isset ( $data ['category_name'] )) {
			$this->db->set ( 'category_name', $data ['category_name'] );
		}
		if (isset ( $data ['category_id'] )) {
			$this->db->where ( 'category_id', $data ['category_id'] );
			$this->db->update ( 'user_category' );
			$id = $data ['category_id'];
		} else {
			$this->db->insert ( 'user_category' );
			$id = $this->db->insert_id ();
		}
		
		$status = $this->db->affected_rows ();
		return ($status == 0) ? FALSE : $id;
	}
}
?> 