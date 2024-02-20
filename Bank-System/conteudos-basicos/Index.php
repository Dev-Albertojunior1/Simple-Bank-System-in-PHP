<?php
class Account {

    private $name;
    private $acc;
    public static $agency;
    private $senha;
    private $saldo;

    public function __construct($name, $acc, $agency, $senha) {
        $this->name = $name;
        self::$agency = $agency;
        $this->senha = $senha;
        $this->acc = $acc;
        $this->saldo = 0.0;
    }

    public function verificarLogin($name, $senha) {

        
        return $this->name === $name && $this->senha === $senha;
    }

    public function deposit($value) {
        if ($value > 0) {
            $this->saldo += $value;
            echo "DEPOSIT OF $value$ SUCCESSFULLY COMPLETED\n";
        } else {
            echo "ACCESS DENIED, INCORRECT DATA\n";
        }
    }
}

    echo "PLEASE ENTER YOUR NAME TO LOG IN\n";
    $nomeDigitado = readline();

    echo "\nPLEASE ENTER YOUR PASSWORD TO LOG IN\n";
    $senhaDigitada = readline();

    $account = new Account("A", "1234", "Standard-Bank", "1");

    if ($account->verificarLogin($nomeDigitado, $senhaDigitada)) {
        echo "Successful login\n";

        while (true) {
            echo "*********************************\n";
            echo "Welcome to " . Account::$agency . "\n";
            echo "Main Menu:\n";
            echo "1. Deposit\n";
            echo "2. Withdraw\n";
            echo "3. Transfer\n";
            echo "4. Exit\n";
            echo "*********************************\n";

            $opcion = readline("Choose an option: ");

            switch ($opcion) {
                case 1:
                    echo "PLEASE ENTER THE AMOUNT YOU WANT TO DEPOSIT\n";
                    $valorDeposito = readline();
                    $account->deposit($valorDeposito);
                    break;
            }
        }
    } else {
        echo "Login Failed, please try again\n";
    }

?>
