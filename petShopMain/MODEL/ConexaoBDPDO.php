
<?php
   class ConexaoPDOBD{
    


    public function conectarBDPDO(){
        
     $serverName = "localhost";
     $userName = "root";
     $password = "usbw";
     $bdName = "mundopet";

    try
        {
            $PDO = new PDO( 'mysql:host=' . $serverName . ';dbname=' . $bdName, 
            
            $userName, $password ); 
        }
        catch ( PDOException $e )
        {
            
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }            echo 'teste realizado';

    }
}

?>