<?php
/**
 * Date: 19.11.2021
 * Author: Alexander Kuziv 
 * Email: alexander@makklays.com.ua
 */
namespace mylife\office;

/**
 * Class Terminator 
 * ```php
 * $copach = new Terminator('Debil');
 * $copach->setMission('Llavar los platos.'); // Llavé los platos.
 * $copach->addWord('Sam');
 * $copach->addWord('Max');
 * $copach->addWord('Min');
 * $word = $copach->giveWord();
 * ```
 * ¿Que esta haciendo Terminator?
 */
class Terminator()
{
  public $name;
  public $hand = 'up';
  public $model = 'T700';
  public $mission;
  public $label = 'good';
  
  public function __construct(string $name)
  {
    $this->name = $name;
    $this->create();
  }
  
  public function setBuenoLabel()
  {
    $this->label = 'good';
  }
  
  public function setBadLabel()
  {
    $this->label = 'bad';
  }
  
  public function getLabel(): string
  {
    return $this->label;
  }
  
  public function create(): string
  {
    // created date 
    return 'Created ' . date('d.m.Y H:i');
  }
  
  public function info(): string
  {
    // full info
    return $this;
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
      'hasta la vista',
    ];
    
    return $this->words;  
  }
  
  public function giveWord()
  {
    $this->words = $this->useWords();
    shuffle($this->words);
    $word = array_shift($this->words);
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
 * Class Mosca
 * ```php
 * $mosca = new Mosca('Mosca');
 * $days_lives = $mosca->getDaysLives();
 * ```
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
    $days = $seconds / 86400 % 7;
    if ($days < 1) $days = 1;
    
    return $days;
  }
  
  public function makeSex(Mosca $otraMosca): Mosca|null
  {
    // make sex
    if ($otraMosca instanceof Mosca) {
      $mosca = new Mosca($otraMosca->getNombre.'-'.$this->getNombre);
      return $mosca;
    }
    
    return null;
  }
}

// utiliza
$copach = new Terminator('Debil');
$copach->setMission('Llavar los platos.'); // Llavé los platos.
$copach->addWord('Sam');
$copach->addWord('Min');
$copach->addWord('Max');
$copach->addWord('Sum');
$word = $copach->giveWord();
$label = $copach->getLabel();

echo '<pre>';
print_r($copach);
print_r('Word => ' . $word);
print_r($label)
echo '</pre>';

$mosca_man = new Mosca('Mujer');
$mosca_girl = new Mosca('Hombre');
$days_lives = $mosca_man->getDaysLives();
// Mosca tiene gender ?) no lo se 
$moscita = $mosca_girl->makeSex($mosca_man);

echo '<pre>';
print_r($days_lives);
print_r($moscita);
echo '</pre>';

// Where are error(s) ?
