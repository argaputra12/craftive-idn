<?php

namespace App\Facades;


class Helper extends \Illuminate\Support\Facades\Facade
{
  protected static function getFacadeAccessor()
  {
    return \App\Helpers\Helper::class;
  }
}
