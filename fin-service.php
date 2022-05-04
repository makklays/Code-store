<?php 

class FinService()
{
  public function new_job($salary_usd)
  {
    if ($salary_usd <= 2000) {
      return 'bad';
    } else {
      return 'good';
    }
  }
}
