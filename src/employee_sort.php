<?php // ./src/employee_dislay.php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
use Acme\IEmployee;
use Acme\Employee;

    $tab_employee = array();
    $keys=array();
    $tab_employee [] = new Employee(1,"superman",1.27,80);
    $tab_employee [] = new Employee(2,"batman",1,73);
    $tab_employee [] = new Employee(3,"spiderman",0.82,50);
    
    foreach($tab_employee as $employe){
        array_push($keys,$employe->getName());
    }

    foreach($tab_employee as $employe){
            $employees = array_fill_keys($keys,$employe);
        
    }
    print_r($employees);


?>