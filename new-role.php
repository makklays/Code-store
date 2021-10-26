<?php
/**
 * Author: Alexander Kuziv
 * E-mail: makklays@gmail.com, alexander@makklays.com.ua
 * Description: Looking for a new job Developer PHP
 **/
interface DeveloperPHPInterface
{
    public function develop()
}

class NewRole implements DeveloperPHPInterface
{
    public function develop()
    {
        return true;
    }
    
    function newRole()
    {
        return {
            'position': 'Developer PHP',
            'salary_min': '1500',
            'salary_max': '4500',
            'salary_currency': 'USD',
            'location': 'office',
            'notify': 'sms,email,phone'
        }
    }
}

?>
