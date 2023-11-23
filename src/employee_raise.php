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

    echo "avant augmentation : ";
    foreach($tab_employee as $employe){
        echo $employe . "\n";
    }

    function employee_raise(IEmployee $e){
        if(is_object($e) && $e instanceof Employee ){
            $salaire = $e->getsalary();
            $augmentation = ($salaire * 5) /100;
            $salaire += $augmentation;
            $e->setsalary($salaire);
        } else throw new Exception(" cette fonction a besion d'un employee");
       
    }

    array_map("employee_raise",$tab_employee);

    echo " apres augmentation :";

    foreach($tab_employee as $employe){
        echo $employe . "\n";
    }
?>