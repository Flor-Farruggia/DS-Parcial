<?php

class Paciente {
    public $Id;
    public $Nombre;
    public $Apellido;
    public $Dni;
    public $Edad;
    public $Email;
    public $ListaTurno = array();

    public function MostrarDatos (){
        echo 'Paciente: '.'<br>';
        echo '-Id: '.$this->Id.'<br>';
        echo '-Nombre: '.$this->Nombre.'<br>';
        echo '-Apellido: '.$this->Apellido.'<br>';
        echo '-Dni: '.$this->Dni.'<br>';
        echo '-Edad: '.$this->Edad.'<br>';
        echo '-Email: '.$this->Email.'<br>';
        $rangoEdad = $_GET['edad'];
        if ($rangoEdad <= 17) {
            echo '-Paciente menor de edad.';
        } else if ($rangoEdad >= 18 && $rangoEdad <= 74) {
            echo '-Paciente mayor de edad.';
        } else if ($rangoEdad > 74) {
            echo '-Paciente en la tercera edad.';
        }

        echo '<hr>'.'Turnos: '.'<hr>';
        foreach ($this->ListaTurno as $lt) {
            echo '-Id: '.$lt->Id.'<br>';
            echo '-Fecha: '.$lt->Fecha.'<br>';
            echo '-Hora: '.$lt->Hora.'<br>';
            echo '-Médico: '.$lt->Medico.'<br>';
            echo '-Especialidad: '.'<br>';
            echo '---Id: '.$lt->Especialidad->Id.'<br>';
            echo '---Descripción: '.$lt->Especialidad->Descripcion.'<hr>';
        }
    }
}