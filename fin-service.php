<?php

class FinService
{
  public function sds(date $date): string
  {
    // generate a new SDS (Single Digital Signature)
    return $date;
  }
  
  public function new_job(integer $salary_usd): string
  {
    if ($salary_usd <= 2000) {
      return 'bad';
    } else {
      return 'good';
    }
  }
  
  protected static function count_levit()
  {
    // el sabado - 30 - 55 años
    //$total = 2750 + 2630 + 3470; // 8850
    $total = 2750 + 2630 + 3470; // 8580
    
    return $total;
  }
  
  // Donde me siento ?
  public function dondeMeSiento(string $nombre)
  {
    // Será tan o era tan
    if ($nombre == 'Díos') {
      $mi_lugar = $this->getPlaceDios();
    } else if ($nombre == 'Jesus') {
      $mi_lugar = $this->getPlaceJesus();
    //} else if ($nombre == 'Issaya') { // Is Saya? Is Ekil?
    //  $mi_lugar = $this->getPlaceIssaya(); // Él queda :-))) 
    } else {
      $mi_lugar = $this->getPlace($nombre); // Todos los profetas
    }
    
    return $mi_lugar;
  }
  
  // Busco Díos
  final function getPlaceDios(): array
  {
    $palceDios = $this->places('Díos');
    
    return $palceDios;
  }
  
  // Busco Jesús
  final function getPlaceJesus(): array
  {
    // María dijo que Jеsús de Espíritu Santo (su padre)
    $palceJesus = $this->places('Jesús');
    
    return $palceJesus;
  }
  
  // Busco mi lugar
  final function getPlace($name): array 
  {
    // Quizas, error de ortodoxos y catolicos
    // Donde está los ortodoxos o catolicos, en Jesús, en Alexander, en Aquí?
    //$lugar = $this->places('Jesús');
    // o no?
    
    $lugar = $this->places($name);
    
    return $lugar;
  }
  
  // Los sitios para diferentes nombres
  protected function places($name): array
  {
    //--------------------------------------------------
    // Díos - Espíritu Santo - Espíritu de las Angeles
    //--------------------------------------------------
    
    if (in_array($name, ['Jesús', 'Díos'])) {
      $places = [
        'A la derecha de Espíritu Santo en el séptimo cielo',
        'A la derecha de Espíritu de las Angeles en el séptimo cielo'
      ];
    } else {
      $places = [
        'A la derecha de Espíritu Santo en el séptimo cielo',
        'A la derecha de Espíritu de las Angeles en el séptimo cielo'
      ];
    }
    
    return $places; 
  }
}

