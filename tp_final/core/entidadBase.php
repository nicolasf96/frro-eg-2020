<?php
class EntidadBase{
    private $table,$db,$conectar;
    public function __construct($table, $adapter){
        $this->table = (string)$table;
        $this->conectar = null;
        $this->db = $adapter;
    }
    public function getConectar(){
        return $this->conectar;
    }
    public function db(){
        return $this->db;
    }
    public function getAll(){
        $query = $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
        while($row = $query->fetch_object()){
            $resultSet[] = $row;
        }
        return $resultSet;
    }
    public function getById($id){
        $query=$this->db->query("SELECT * FROM $this->table WHERE id='$id'");
        if($row = $query->fetch_object()){
            $resultSet=$row;
        }
        return $resultSet;
    }
    public function getBy($column,$value){
        $sql = "SELECT * FROM $this->table WHERE ";
        foreach($column as $i=>$c){
            $sql .= " $c='".$value[$i]."' AND";  
        }
        $sql =explode(" ",$sql);
        unset($sql[count($sql)-1]);
        $sql = implode(" ",$sql);
        $query = $this->db->query($sql);
        return $this->generateResp($query);
    }
    public function deleteById($id){
        $query=$this->db->query("DELETE FROM $this->table WHERE id=$id");
        return $query;
    }
    public function deleteBy($column,$value){
        $sql = "DELETE FROM $this->table WHERE ";
        foreach($column as $i=>$c){
            $sql .= " $c='".$value[$i]."' AND";  
        }
        $sql =explode(" ",$sql);
        unset($sql[count($sql)-1]);
        $sql = implode(" ",$sql);
        $query=$this->db->query($sql);
        return $query;
    }
    private function generateResp($query){
        if($query==true){
            if($query->num_rows>1){
                while($row = $query->fetch_object()) {
                    $resultSet[]=$row;
                 }
            }elseif($query->num_rows==1){
                if($row = $query->fetch_object()) {
                    $resultSet=$row;
                }
            }else{
                $resultSet=true;
            }
        }else{
            $resultSet=false;
        }
        return $resultSet;
    }
}
?>