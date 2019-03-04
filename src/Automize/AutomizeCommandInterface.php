<?php
namespace Zenderator\Automize;

interface AutomizeCommandInterface
{
    public function getCommandName() : string;

    public function getArguments() : array;

    public function action() : bool;
}
