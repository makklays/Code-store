<?php

namespace eeuu/ucrania;

use eeuu/experiencia/paises;

interface EEUU 
{
  public function candidado();
  public function miembro();
}

class Ucrania implements EEUU 
{
  protected $fecha_candidado = '';
  protected $fecha_miembro = '';

  public function candidado(): boolean
  {
    $anceta = [
      '¿Donde tomo el dinero?' => '',
      '¿Donde vivir?' => '',
      '¿Donde trabajar?' => '',
      '¿Cuanto cuesta aquilar el piso?' => '',
      '¿Donde comprar el perro?' => '',
      '¿Cuando aparece el euro en Ucrania? ¿Cuando poder a comprar algo por euros?' => '',
      '¿La economica es como en el pais europeo?' => '',
      'etc' => '',
    ];
    
    if ($this->procesamiento($anceta)) { // de abril de 2022 
      // esperamos el junio de 2022
      $this->fecha_candidado = 'el junio de 2022';
    }
    
    return true;
  }
  
  private function procesamiento(array $anceta): boolean
  {
    // procesimiento de respuestas 
    foreach ($anceta as $pregunta => $respuesta) {
      if (empty($respusta)) {
        // hay que la respuesta
        return false;
      }
    }
    
    return true; 
  }
  
  public function miembro()
  {
    if ($this->candidado()) {
      return true;
    }
  }
  
  public function getFechaCandidadoEEUU()
  {
    return $this->fecha_candidado;
  }
  
  public function getFechaMiembroEEUU()
  {
    return $this->fecha_miembro;
  }
}

$ucrania = new Ucrania();
$fecha_candidado = $ucrania->getFechaCandidadoEEUU();
$fecha_miembro   = $ucrania->getFechaMiembroEEUU();

if ('d-m-Y' <= $fecha_candidado && $fecha_candidado <= 'd-m-Y') {
  echo 'Muy perfecto para el candidado.';
} else {
  echo 'Rapido para el candidado.';
}


