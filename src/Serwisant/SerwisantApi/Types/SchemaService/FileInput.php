<?php

namespace Serwisant\SerwisantApi\Types\SchemaService;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class FileInput extends Types\Type
{
  /**
   * @var string
   * File MIME type, eg. image/png - must be valid IANA media type, list: http://www.iana.org/assignments/media-types/media-types.xhtml
  */
  public $contentType;

  /**
   * @var string
   * File name, only for display purposes
  */
  public $name;

  /**
   * @var string
   * File content encoded with base64. Please note: generic request size limit is always applied - whole mutation must be below 100MB
  */
  public $payload;

  /**
   * @var bool
   * Pass true if file can be viewed by customer in his panel
  */
  public $public;

  protected function schemaNamespace()
  {
    return 'SchemaService';
  }
}