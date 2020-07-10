<?php
class ModeloBase extends EntidadBase{
    private $table;
    public function __construct($table, $adapter){
        $this->table = (string)$table;
        parent::__construct($table, $adapter);
    }
    public function ejecutarSql($query){
        /*
        Desc: ejecutar consultas no contempladas en entidadBase
        Param: Consulta
        Resp: true=ejecuto,false=error,o resultado;
        */
        $query = $this->db()->query($query);
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