<?php

namespace App\Libraries;

class database
{
	protected $table = '';
	protected $db = 'default';
	protected $driver = 'mysql';

	public function __construct()
	{
		$this->db = \Config\Database::connect($this->db);
		if (!$this->db->tableExists($this->table)) {
			$this->showError(1);
		}
	}

	public function find($param = ['id' => 1], $order = "", $direction = "")
	{
		if (is_array($param)) {
			return $this->db
				->table($this->table)
				->where($param)
				->orderBy($order, $direction)
				->get()
				->getRow();
		} else {
			return $this->db
				->table($this->table)
				->where(['id' => $param])
				->orderBy($order, $direction)
				->get()
				->getRow();
		}
	}

	public function select($param = [], $limit = null, $group = [], $column = '*', $order = "", $direction = "")
	{
		$query = $this->db
			->table($this->table)
			->select($column)
			->where($param)
			->groupBy($group)
			->orderBy($order, $direction);
		if (is_array($limit)) {
			$query = $query->get($limit[0], $limit[1]);
		} else {
			$query = $query->get($limit);
		}
		return $query->getResult();
	}

	public function count($param = [])
	{
		return $this->db
			->table($this->table)
			->where($param)
			->countAllResults();
	}

	public function exists($param = [])
	{
		return ($this->db
			->table($this->table)
			->where($param)
			->countAllResults() > 0 ? true : false);
	}

	public function insert($param)
	{
		return $this->db
			->table($this->table)
			->insert($param);
	}

	public function update($param, $data)
	{
		return $this->db
			->table($this->table)
			->where($param)
			->update($data);
	}

	public function delete($param)
	{
		return $this->db
			->table($this->table)
			->delete($param);
	}

	public function LastID()
	{
		return $this->db->insertID();
	}

	public function like($cols = "*", $where = [], $like = [])
	{
		$query = $this->db
		->table($this->table)
		->select($cols)
		->where($where)
		->like($like);
		return $query->get()->getResult();
	}

	private function showError($param)
	{
		switch ($param) {
			case 1:
				die("Table isn't exists! :" . $this->table);
			case 2:
				die("Duplicate :" . $this->table);
		}
	}
}
