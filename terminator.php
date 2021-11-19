<?php
/**
 * Date: 19.11.2021
 * Author: Alexander Kuziv 
 * Email: alexander@makklays.com.ua
 */
namespace mylife\office;

class Terminator()
{
  public $name;
  public $hand = 'up';
  public $model = 'T700';
  public $mission;
  
  public function __construct(string $name)
  {
    $this->name = $name;
    $this->create();
  }
  
  public function create(): string
  {
    // 
    return 'Created ' . date('d.m.Y H:i');
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
    $this->words = [
      'delete',
      'go to ass',
      'seo',
      'lead',
      'team',
      //'happends',
      'case',
    ];
    
    return $this->words;  
  }
  
  public function giveWord()
  {
    $this->words = $this->useWords();
    $word = array_shufle($words);
    // con esta matriz palabra primera 
    return $word;
  }
  
  public function addWord($new_word): boolean
  {
    $this->words = $this->useWords();
    array_popup($this->words, $new_word);
  }
}

/**
 * Mosca
 */
class Mosca()
{
  public $nombre;
  
  public function __construct(string $nombre)
  {
    $this->nombre = $nombre;
  }
  
  public function setNombre(string $nombre): string
  {
    $this->nombre = $nombre;
  }
  
  public function getNombre(): string
  {
    return $this->nombre;
  }
}

$copach = new Terminator('Nastya');
$copach->setMission('Llavar los platos.');

$mosca = new Mosca('Cat');

