<?php
echo "Debug: Conexion called! </br>";
class Conexion{

    private $conexion;
    private $servername = "localhost";
    private $db="projeto";
    private $username = "root";
    private $password = "admin";
    function __construct()
    {
        try{
        $this->conexion= new PDO("mysql:host=$this->servername;dbname=$this->db", $this->username, $this->password);    
        }
        catch (PDOException $e){
            return "Uh Oh!.$e";
        } 
    }

    public function getUsers(){
        echo "Debug: GetUsers </br>";
        $stmt = $this->conexion->prepare("SELECT * FROM usuarios");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
     
    }

     public function read ($tbl, $clmns, $where = '')
      {
        try {
          $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $this->db->query("SELECT {$clmns} FROM {$tbl}");
          if ($where != '') {
            $stmt = $this->db->query("SELECT {$clmns}
              FROM {$tbl}
              WHERE {$where}");
          }
          $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return $rows;
        }
        catch(PDOException $e){
          return 'SomeThing wrong in read Data';
        }
      }
}
?>