<?php
const SALON_TIPO1 = "Aula";
const SALON_TIPO2 = "Laboratorio";


class Salon extends EntidadBase{
    private $id;
    private $nombre;
    private $tipo_id;

    public function __construct($adapter) {
        $table="salones";
        parent::__construct($table, $adapter);
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTipo() {
        return $this->tipo_id;
    }

    public function getSalonHorario($id){
        $query = "SELECT * FROM salones WHERE id=$id";
        $horario = $this->db()->query($query);

        $salon = $horario->fetch_assoc();

        return ($salon['tipo_id'] === 1 ? $salon['nombre']." ".SALON_TIPO1 : $salon['nombre']." ".SALON_TIPO2);
    }

}
?>
