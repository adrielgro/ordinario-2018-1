<?php
class Curso extends EntidadBase{
    private $id;
    private $nombre;
    private $profesor;

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
}
?>
