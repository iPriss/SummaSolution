<?php  

	require('Classes/SummaSolution.php');
	
	// Init Company
	$company = new Company();
	
	// Create new company
	$company->createCompany(1, "Leander");

	// List all companies
	print_r($company->companyList(0)); echo "<br>";

	// Create employees
	$company->createNewEmployee(1, 'John', 'Doe', 'designer', 'Web', 23);
	$company->createNewEmployee(2, 'Julian', 'Casablancas', 'developer', 'PHP', 33);
	
	// Employee list -- Optional Employee ID 
	print_r($company->companyEmployeesList()); echo "<br>";
	
	// Employee Average
	print_r($company->calculateAverageAge()); echo "<br>";
?>