<?php
class Person
{
public function __construct(private string $firstName,
private string $lastName,
protected int $age)
{
}

public function getFullName():string
{
return $this->firstName." ".$this->lastName;
//return "{$this->firstName} {$this->lastName}";
}

public function afficheInfos(): string
{
    return $this->firstName . " " . $this->lastName . " " . $this->age . "";
}

/**
 * Get the value of firstName
 */
public function getFirstName(): string
{
return $this->firstName;
}

/**
 * Set the value of firstName
 */
public function setFirstName(string $firstName): self
{
$this->firstName = $firstName;

return $this;
}

/**
 * Get the value of lastName
 */
public function getLastName(): string
{
return $this->lastName;
}

/**
 * Set the value of lastName
 */
public function setLastName(string $lastName): self
{
$this->lastName = $lastName;

return $this;
}

/**
 * Get the value of age
 */
public function getAge(): int
{
return $this->age;
}

/**
 * Set the value of age
 */
public function setAge(int $age): self
{
$this->age = $age;

return $this;
}
}
$person = new Person("john", "Doe", 20);

echo "info de la personne : " . $person->afficheInfos() . "";

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */
