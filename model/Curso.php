<?php
class Curso extends EntidadBase{
    private $id;
    private $nombre;
    private $profesor;
    private $horario;

    public function __construct($adapter) {
        $table="cursos";
        parent::__construct($table, $adapter);
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getProfesor() {
        return $this->profesor;
    }

    public function getHorario() {
        return $this->horario;
    }

    /*public function save(){
        $query="INSERT INTO usuarios (id,nombre,email,password)
                VALUES(NULL,
                       '".$this->nombre."',
                       '".$this->email."',
                       '".$this->password."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }*/

}
?>
