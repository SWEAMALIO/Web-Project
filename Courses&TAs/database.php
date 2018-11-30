<?php
include ('constants.php');
class database
{
    private $t = TYPE;
    private $h = HOST;
    private $u = USER;
    private $p = PASS;
    private $dbn =DBNAME;

    function __construct()
    {
        //Connection string
   	$this->pdo = new PDO($this->t . ":host=" . $this->h . ";dbname=Cs_and_Ts", $this->u,
   	$this->p,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    }

    public function getRow($query, $params=array())
    {
                $stmt = $this->pdo->prepare($query);
                $stmt->execute($params);
                return $stmt->fetch();


    }

    public function getRows($query, $params=array())
    {
                $stmt = $this->pdo->prepare($query);
                $stmt->execute($params);
                return $stmt->fetchAll();


    }

    public function insertRow($query, $params)
    {
                $stmt = $this->pdo->prepare($query);
                $stmt->execute($params);
                return $stmt->rowCount();
    }

    public function updateRow($query, $params)
    {
            return $this->insertRow($query, $params);
    }

    public function deleteRow($query, $params)
    {
            return $this->insertRow($query, $params);
    }

    public function MyExec($query)
    {
             return $this->pdo->exec($query);
    }

}
     $db = new database;
?>
