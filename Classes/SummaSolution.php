<?php

Class Employees {
	private $id;
	private $name;
	private $lastName;
	private $age;
	private $position;
	private $detail;

	protected $employees;

    function __construct() {
    	$this->employees = array();
    }

	public function createNewEmployee($id, $name, $lastName, $position, $detail, $age) {
		$this->employees[$id] = array(
			"id"       => $id,
			"name"     => $name,
			"lastName" => $lastName,
			"age"      => $age,
			"position" => $position,
			"detail"   => $detail
		);
	}
}

Class Company extends Employees {
	public $id;
	public $name;
	public $companies = array();

	public $employees;

    public function __construct() {
        parent::__construct();
    }

	public function createCompany($id, $name) {
		$this->companies[$id] = $name;
	}

	public function companyList($id=Null) {
		return ($id !== Null && array_key_exists($id, $this->companies)) ? $this->companies[$id] : $this->companies;
	}

	public function companyEmployeesList($id=Null) {
		return ($id !== Null && array_key_exists($id, $this->employees)) ? $this->employees[$id] : $this->employees;
	}

	public function calculateAverageAge() {
		return array_sum( array_map( function($item) { return $item['age']; }, $this->companyEmployeesList() ) ) / count( $this->companyEmployeesList() );
	}

}

?>