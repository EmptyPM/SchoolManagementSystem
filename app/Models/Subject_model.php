<?php

namespace App\Models;

use CodeIgniter\Model;

class Subject_model extends Model
{
	public function get_all()
	{
		$db = db_connect();
		$sql = 'SELECT * FROM subjects';
		$query = $db->query($sql);
		return $query->getResult();
	}

	public function get($id)
	{
		$db = db_connect();
		$sql = 'SELECT * FROM subjects WHERE id = ?';
		$query = $db->query($sql, $id);
		return $query->getResult()[0];
	}

	public function add($data)
	{

		$db = db_connect();
		$builder = $db->table('subjects');
		$builder->insert($data);
	}

	public function edit($id, $data)
	{
		$db = db_connect();
		$builder = $db->table('subjects');
		$builder->where('id', $id);
		$builder->update($data);
	}

	public function remove($id)
	{
		$db = db_connect();
		$sql = 'DELETE FROM subjects WHERE id = ?';
		$query = $db->query($sql, $id);
	}
}
