<?php
class Horario extends EntidadBase{
    private $id;
    private $dia;
    private $hora_inicio;
    private $hora_fin;
    private $curso_id;
    private $salon_id;

    public function __construct($adapter) {
        $table="horarios";
        parent::__construct($table, $adapter);
    }

    public function getId() {
        return $this->id;
    }

    public function getDia() {
        return $this->dia;
    }

    public function getHoraInicio() {
        return $this->hora_inicio;
    }

    public function getHoraFin() {
        return $this->hora_fin;
    }

    public function getCursoId() {
        return $this->curso_id;
    }

    public function getSalonId() {
        return $this->salon_id;
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

    //Metodos de consulta
    public function getHorariosCurso($id){
        $query="SELECT * FROM horarios WHERE curso_id=$id";
        $horarios=$this->db()->query($query);
        return $horarios->fetch_all();
    }

}
?>
