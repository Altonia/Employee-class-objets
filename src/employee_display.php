<?php // ./src/employee_dislay.php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
use Acme\IEmployee;
use Acme\Employee;

$tab_employee = array ();
    $employee1 = new Employee(1,"superman",1.27,80);
    $employee2 = new Employee(2,"batman",1,73);
    $employee3 = new Employee(3,"spiderman",0.82,50);
    array_push($tab_employee,$employee1);
    array_push($tab_employee,$employee2);
    array_push($tab_employee,$employee3);
    //print_r($tab_employee);

    foreach($tab_employee as $employe){
        echo $employe. "\n";
    }

    $closure = function (IEmployee $e): float {
                    return $e->getSalary();
                };

    $salaries = array_map($closure, $tab_employee);
    //print_r($salaries);

    echo "mean salary = " . array_sum($salaries) / count($salaries) . "\n";
    

?>