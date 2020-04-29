<?php
echo "Conexion called! </br>";
class Conexion{

    
    private $conexion;
    private $servername = "localhost";
    private $db="projeto";
    private $username = "root";
    private $password = "admin";
    function __construct($servername,$db,$username,$password)
    {
        try{
        $this->conexion= new PDO("mysql:host=$servername;dbname=$db", $username, $password);    
        }
        catch (PDOException $e){
            return "Uh Oh!.$e";
        } 
    }

    public function getUsers(){
        echo "GetUsers </br>";
        $stmt = $this->conexion->prepare("SELECT * FROM usuarios");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
     

        foreach ($result as $row) {
            $data = [];
            foreach ($row as $key => $value) {
                array_push($data, utf8_encode($value));
            }

        return $data;
         }
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