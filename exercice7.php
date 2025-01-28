<?php 
class BankAccount {
    private $balance;


    public function __construct($initialBalance = 0) {
        $this->balance = $initialBalance;
        echo "solde : $this->balance €<br>";
    }

   
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Dépôt de $amount € effectué. Nouveau solde : $this->balance €<br>";
        } else {
            echo "Le montant du dépôt doit être supérieur à 0.<br>";
        }
    }

  
    public function withdraw($amount) {
        if ($amount > 0) {
            if ($this->balance >= $amount) {
                $this->balance -= $amount;
                echo "Retrait de $amount € effectué. Nouveau solde : $this->balance €<br>";
            } else {
                echo "Solde actuel : $this->balance €<br>";
            }
        } else {
            echo "doit etre supérieur à 0.<br>";
        }
    }

  
    public function getBalance() {
        return $this->balance;
    }
}


$myAccount = new BankAccount(100); 

$myAccount->deposit(50); 
$myAccount->withdraw(30); 
$myAccount->withdraw(150);
$myAccount->deposit(-20); 
$myAccount->withdraw(0);
    
/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/