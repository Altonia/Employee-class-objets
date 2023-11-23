<?php // ./src/Employee.php
declare(strict_types=1); // lève une exception si erreur de typage à l'appel de fonctions/méthodes
namespace Acme;
require_once __DIR__ . '/../vendor/autoload.php';

Interface IManager extends IEmployee {
    public function __construct(int $id, string $name,float $salary, int $age);    
    public function add(int $employeeId);
    public function getArrEmployeesId() : array;
}
?>