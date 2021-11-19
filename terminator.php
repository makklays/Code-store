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
    // de esta matriz palabra primera 
    return $word;
  }
  
  public function addWord($new_word): boolean
  {
    $this->words = $this->useWords();
    if (array_popup($this->words, $new_word)) {
      return true;
    } else {
      return false;
    }
  }
}

/**
 * Mosca
 */
class Mosca()
{
  public $nombre;
  public $days_lives;
  public $nacere;
  
  public function __construct(string $nombre)
  {
    $this->nombre = $nombre;
    $this->days_lives = 1;
    $this->nacere = time();
  }
  
  public function setNombre(string $nombre): string
  {
    $this->nombre = $nombre;
  }
  
  public function getNombre(): string
  {
    return $this->nombre;
  }
  
  public function getDaysLives(): int
  {
    $seconds = time() - $this->nacere;
    
    return $seconds / 86400 % 7;
  }
}

$copach = new Terminator('Debil');
$copach->setMission('Llavar los platos.'); // Llavé los platos.
$copach->addWord('Sam');
$word = $copach->giveWord();

echo '<pre>';
print_r($copach);
print_r('Word => ' . $word);
echo '</pre>';


$mosca = new Mosca('Cat');
$days_lives = $mosca->getDaysLives();

echo '<pre>';
print_r($mosca);
print_r($days_lives);
echo '</pre>';

// Where are error(s) ?
