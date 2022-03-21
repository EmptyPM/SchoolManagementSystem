<?php

namespace App\Models;

use CodeIgniter\Model;

class Attendence_model extends Model
{
	public function get_all()
	{
		$db = db_connect();
		$sql = 'SELECT * FROM attendence';
		$query = $db->query($sql);
		$result = $query->getResult();



		// foreach ($result as $key => $row) {

		// 	$present_students = json_decode($row->present_students);

		// 	$attendence_data = array();

		// 	foreach ($present_students as  $student) {
		// 		$sql2 = 'SELECT * FROM students WHERE id = ?';
		// 		$query2 = $db->query($sql2, $student);
		// 		$student_data = $query2->getResult()[0];

		// 		array_push(
		// 			$attendence_data,
		// 			[
		// 				$student_data->full_name,
		// 				$student_data->gender
		// 			]

		// 		);
		// 	}

		// 	$row->present_students = $attendence_data;
		// }
		return $result;
	}

	public function get($class)
	{
		$db = db_connect();
		$sql = 'SELECT * FROM attendence WHERE class = ? AND a_date = ?';

		$date = date("y-m-d", strtotime("today"));

		$query = $db->query($sql, [$class, $date]);
		return $query->getResult()[0];
	}

	public function add($data)
	{

		$db = db_connect();
		$builder = $db->table('attendence');
		$builder->insert($data);
	}

	public function edit($data)
	{
		$db = db_connect();

		$builder = $db->table('attendence');

		$date = date("y-m-d", strtotime("today"));

		$builder->where('class', $data['class']);
		$builder->where('a_date', $date);

		$builder->update($data);
	}
}
