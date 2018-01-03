<?php
namespace Zenderator\Automize;

interface AutomizeCommandInterface
{
    public function getCommandName() : string;

    public function action() : bool;
}
