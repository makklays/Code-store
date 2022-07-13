<?php 
/**
 * Author: People
 * E-mail: MyDog@hotdog.net
 * Description: Looking for head on body without heard
 */
 
use experience/EEUU/miembroEEUU;
use experience/dinero/dineroEEUU;

class ReForms implements miembroEEUU
{
  // 
  protected function findHead(array $candidatos): string
  {
    foreach($candidatos as $candidat) 
    {
      $need_skils = [];
      if ($candidat->skils == $need_skils) {
        $answer = 'Congratulate!';
      } else {
        $answer = 'Don\'t have skils';
      }
    }
    
    return $answer; 
  }
  
  // What are the terms? How many sPrint-s? (1 week - Sprint)
  /*public function returnHeard($solders, $techNic, $tanks): boolean
  {
    if ($solders >= 12000 && $techNic >= 400 && $tanks >= 100) { 
      return true;
    } else {
      return false; 
    }
  }*/
  
  // 
  public function LGBT($man1, $man2, $woman1, $woman2): mixed
  {
    // todo wedding 
    // кого то послали )))
  }
}

$arr_candidatos = [
  '1' => 'Agent Smit',
  '2' => 'Agent Smit',
  '3' => 'Bugs Bunny',
  '4' => 'Agent Smit',
  '5' => 'Agent Smit',
  '6' => 'Neo',
  '777' => 'Agent Smit',
];
$reForm = new ReForms;
$reForm->findHead($arr_candidatos); // result 1
$reForm->LGBT($man1, $man2, $woman1, $woman2); // result 2

//$tanks = TechNicEEUU::getTanks($country)->count;
//$reForm->returnHeard($solders, $techNic, $tanks); // result 3

