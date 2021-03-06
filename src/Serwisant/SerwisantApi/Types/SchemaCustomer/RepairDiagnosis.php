<?php

namespace Serwisant\SerwisantApi\Types\SchemaCustomer;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class RepairDiagnosis extends Types\Type
{
  /**
   * @var string
  */
  public $publicRemarks;

  protected function schemaNamespace()
  {
    return 'SchemaCustomer';
  }
}