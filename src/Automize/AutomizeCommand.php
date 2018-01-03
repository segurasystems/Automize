<?php
namespace Zenderator\Automize;

use Camel\CaseTransformer;
use Camel\Format\SnakeCase;
use Camel\Format\StudlyCaps;
use Zenderator\Zenderator;

class AutomizeCommand
{
    private $zenderator;

    public function __construct(Zenderator $zenderator)
    {
        $this->zenderator = $zenderator;
    }

    public function getZenderator() : Zenderator
    {
        return $this->zenderator;
    }

    public function getCommandName() : string
    {
        $transformer = new CaseTransformer(new StudlyCaps(), new SnakeCase());
        $className   = explode("\\", get_called_class());
        $className   = end($className);
        return ucwords(str_replace("_", " ", $transformer->transform(str_replace("Command", "", $className))));
    }
}
