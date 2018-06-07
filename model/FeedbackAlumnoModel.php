<?php
class FeedbackModel extends ModeloBase{
    private $table;

    public function __construct($adapter){
        $this->table="cursos";
        parent::__construct($this->table, $adapter);
    }

    //Metodos de consulta
    public function getUnUsuario(){
        $query="SELECT * FROM cursos WHERE profesor='Adriel'";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}
?>
