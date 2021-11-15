<?php
/**
 * Author: Alexander Kuziv
 * E-mail: makklays@gmail.com, alexander@makklays.com.ua
 * Description: Looking for a new job Developer PHP
 **/
interface DeveloperPHPInterface
{
    public function develop() :boolean
}

class NewRole implements DeveloperPHPInterface
{
    public function develop() :boolean
    {
        return true;
    }
    
    /**
     * Description the new role 
     */
    function newRole() :array
    {
        return {
            'position': 'Developer PHP',
            'salary_min': '1500',
            'salary_max': '4500',
            'salary_currency': 'USD',
            'experiencia': '14 años', 
            'location': 'office',
            'notify': 'sms,email,phone'
        }
    }
    
    function queNecesitoTener(int $age = 0) :array
    {
        $arr = [];
        if ($age > 0 && $age <= 18) {
            $arr[] = 'libreta';
            $arr[] = 'computer';
            $arr[] = 'interes';
        } elseif ($age <= 23) {
            $age[] = 'conocimientos';
        } elseif ($age <= 25) {
            $arr[] = 'novia/novio';
        } elseif ($age <= 28) {
            $arr[] = 'sitio web';
        } elseif ($age >= 30) {
            $arr[] = 'experiencia';   
        } elseif ($age >= 33) {
            $arr[] = 'paciencia';
            $arr[] = 'start up';
            if ( (in_array('sitio web', $arr) || in_array('start up', $arr) ) && in_array('experiencia', $arr)) {
                $arr[] = 'empreza';
            }
        }
        
        return $arr;
    }
    
    /**
     * Count days for my project ?
     */
    public function cuantosDiasHacerProecto($necesitaHoras = 0) {
        
        if ($necesitaHoras <= 0) return 0;
        
        $horas[
            'lunes' => 0,
            'martes' => 2,
            'miercoles' => 0,
            'jueves' => 1,
            'viernes' => 1,
            'sabado' => 0,
            'domingo' => 10,
        ];
        
        // $dias = ceil($necesitaHoras / array_sum($horas)); // tonto =-)
        
        $days = 0;
        
        while($necesitaHoras >= 0) {
            foreach($horas as $d => $horasMias) {
                if ($horasMias <= 0) continue;
                if ($necesitaHoras <= 0) continue;
                
                $necesitaHoras = $necesitaHoras - $horasMias;
                $days++;
            }
        }
        
        return $days; 
    }
    
    /**
     * A cow in IT
     */
    public function cowIT($food): int
    {
        if ($food <= 0) {
            $milk = 0;   
        } else if ($food >= 0) {
            $milk = ceil( $food / 3 );   
        }
        
        return $milk;   
    }
    
    /**
     * Finding a shortcut to success. 
     */
    private function FindingShortcut(): string
    {
        $texto = 'directo'; // Прямой 
        
        return $texto;
    }
    
    // Next - 15.11.2021 - 23 meses
    
}

?>
