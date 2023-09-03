<?php

namespace App\Helpers;

use \NumberFormatter;

class Helper
{
  public function convertCurrency(String $number): string
  {
    $formatter = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
    return $formatter->formatCurrency($number, 'IDR');
  }
}
