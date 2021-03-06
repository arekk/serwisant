<?php

namespace Serwisant\SerwisantApi\Types\SchemaService;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class CustomerAgreementsFilter extends Types\Type
{
  /**
   * @var string
  */
  public $ID;

  /**
   * @var string[]
  */
  public $types = [];
  protected function schemaNamespace()
  {
    return 'SchemaService';
  }
}