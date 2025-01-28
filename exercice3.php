<?php

class Person
{
    public function __construct(private string $firstName, private string $lastName, protected int $age)
    {
    }

    public function getFullName(): string
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function afficheInfos(): string
    {
        return $this->firstName . " " . $this->lastName . " " . $this->age . " ans";
    }

   
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }
}

class Employee extends Person
{
    private float $salary;
    private string $position;

 
    public function __construct(string $firstName, string $lastName, int $age, float $salary, string $position)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

   
    public function afficheInfos(): string
    {
        return parent::afficheInfos() . " | Poste : " . $this->position . " | Salaire : " . $this->salary . " €";
    }

    /**
     * Getters et setters pour salary et position
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): self
    {
        $this->salary = $salary;
        return $this;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;
        return $this;
    }
}

$employee = new Employee("John", "Doe", 30, 4500, "Dév sen");


echo "info de l'employé : " . $employee->afficheInfos() . "";
?>


/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */
