<?php

namespace Dsprog\Framework\Modules;

interface ContractModule
{
    public function getNamespaces(): array;
    public function getContainerConfig(): string;
    public function getEventConfig(): string;
    public function getMiddlawareConfig(): string;
    public function getRouterConfig(): string;    
}