<?php

class FinService
{
  public function sds(date $date): string
  {
    // generate a new SDS (Single Digital Signature)
    return $date;
  }
  
  public function new_job(integer $salary_usd): string
  {
    if ($salary_usd <= 2000) {
      return 'bad';
    } else {
      return 'good';
    }
  }
  
  protected static function count_levit()
  {
    // el sabado - 30 - 55 años
    $total = 2750 + 2630 + 3470; // 8850
    
    return $total;
  }
}

