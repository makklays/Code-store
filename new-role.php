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
            $arr[] = 'patiencia';   
        }
        
        return $arr;
    }
}

?>
