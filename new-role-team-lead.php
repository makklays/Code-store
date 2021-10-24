<?php
/**
 * Author: Alexander Kuziv 
 * E-mail: makklays@gmail.com
 * Description: Looking for a new job Team Lead
 **/

interface DeveloperInterface
{
    public function roleDeveloper   
}

interface TeamLeadInterface
{
    public function roleTeamLead
}

class TeamLead() implements DeveloperInterface, TeamLeadInterface
{
    function roleTeamLead()
    {
        return {
            'position': 'Team Lead',
            'salary_min': '2500',
            'salary_max': '5000',
            'salary_currency': 'USD',
            'location': 'office',
            'notify': 'sms,email,phone'
        }
    }
}

?>
