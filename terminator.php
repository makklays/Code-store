<?php
/**
 * Date: 19.11.2021
 */
namespace mylife\office;

class Terminator()
{
  public $name;
  public $hand = 'up';
  public $model = 'T700';
  public $mission;
  
  public function create(): string
  {
    // 
    return 'Created ' . date('d.m.Y');
  }
  
  public function giveName(): string
  {
     return $this->name;
  }
  
  public function setMission(string $mission): string
  {
    $this->mission = $mission; 
  }
  
  public function getMission(): string
  {
    return $this->mission; 
  }
  
  public function hand()
  {
    return $this->hand;  
  }
  
  public function useWords()
  {
    $words = [
      'delete',
      'go to ass',
      '',
    ];
    
    return $words;  
  }
}

