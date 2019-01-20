<?php

class User_model extends CI_Model{

		public function getRecords(){
		$query = $this->db->get('users');
		if($query->num_rows()>0){
			return $query->result();
		}
	 }

	 	public function saveRecord($data){
	 		return $this->db->insert('users',$data);
	 		
 	}

 	public function getRecord($id){
 		$this->db->select('*');
 		$this->db->where('user_id', $id);
 		$this->db->from('users');
 		$query = $this->db->get();
 		return $query->row();
 	}

 	public function updateUser($id){
 		$data = array(
					'username'=>$_POST['username'],
					'fname'=>$_POST['fname'],
					'lname'=>$_POST['lname'],
					'email'=>$_POST['email'],
					'dob'=>$_POST['dob'],
					'phone'=>$_POST['phone']
				);
 				$this->db->where('user_id', $id);
 				$this->db->update('users', $data);
 				return $id;
 	}

 	public function deleteUser($id)
 	{
 		$this->db->where('user_id',$id);
 		$this->db->delete('users');
 	}

}

	
?>