
<?php
/**
 * Author: Alexander Kuziv
 * E-mail: makklays@gmail.com, alexander@makklays.com.ua
 * Description: Looking for a new job FullStack Developer PHP
 **/

namespace makklays/newrole;

trait Note()
{
    return [
        'note' => 'algo texto',
    ];
}

class FullStack
{
    use Note;
    
    public function newRole()
    {
        // quiero tener como Desarrollador PHP 
        return {
            'position': 'FullStack Developer PHP',
            'salary_min': '3000',
            'salary_max': '5500',
            'salary_currency': 'USD',
            'location': 'office',
            'notify': 'sms,email,phone',
            'experiencia': 'más 2 años',
        }
    }

    public function queNecesitaSaber()
    {
        // tengo list pequeño 
        return [
            '1' => 'front-end',
            '2' => 'back-end',
            '3' => 'javascript',
            '4' => 'node.ja o react.js o vue.js',
            '5' => 'php ultima version ocho',
            '6' => 'rest full api',
            '7' => 'html5 css3 div y flex se maqueta las paginas webs',
        ];
    }

    public function queNecesitaHacer()
    {
        // tengo list pequeño
        echo [
            '1' => 'piensa',
            '2' => 'programa',
            '3' => 'se proba',
        ];
    }
    
    public function otrosAcciones()
    {
        // algunas acciones
        return [
            '1' => 'toma café o té',
            '2' => 'escucha musica y mira video',
            '3' => 'habla con unas collegas',
        ];
    }
}
