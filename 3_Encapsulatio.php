<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }
    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            echo "Error: Salary must be a positive value.\n";
        }
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getName() {
        return $this->name;
    }

    public function giveRaise($amount) {
        if ($amount > 0) {
            $this->salary += $amount;
            echo "Salary increased by $amount. New salary: " . $this->salary . "\n";
        } else {
            echo "Error: Raise amount must be positive.\n";
        }
    }
}

$employee = new Employee("John Doe", 5000);
echo $employee->getName() . "'s Salary: " . $employee->getSalary() . "\n";

$employee->setSalary(6000);
echo "Updated Salary: " . $employee->getSalary() . "\n";

$employee->setSalary(-1000);

$employee->giveRaise(500);

