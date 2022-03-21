<?php

namespace App\Models;

use CodeIgniter\Model;

class Property_model extends Model
{
	public function get_all()
	{
		$db = db_connect();
		$sql = 'SELECT * FROM properties';
		$query = $db->query($sql);
		return $query->getResult();
	}

	public function get($id)
	{
		$db = db_connect();
		$sql = 'SELECT * FROM properties WHERE id = ?';
		$query = $db->query($sql, $id);
		return $query->getResult()[0];
	}

	public function add($data)
	{

		$db = db_connect();
		$builder = $db->table('properties');
		$builder->insert($data);
	}

	public function edit($id, $data)
	{
		$db = db_connect();
		$builder = $db->table('properties');
		$builder->where('id', $id);
		$builder->update($data);
	}

	public function remove($id)
	{
		$db = db_connect();
		$sql = 'DELETE FROM properties WHERE id = ?';
		$query = $db->query($sql, $id);
	}
}
