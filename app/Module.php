<?php
namespace App;

use Dsprog\Framework\Modules\ContractModule;

class Module implements ContractModule
{
    public function getNamespaces(): array 
    {
        return [
            'App\\' => __DIR__ . '/src'
        ];
    }
    
    public function getContainerConfig(): string 
    {
        return __DIR__ . '/config/containers.php';
    }
    
    public function getEventConfig(): string 
    {
        return __DIR__ . '/config/events.php';
    }
    
    public function getMiddlawareConfig(): string 
    {
        return __DIR__ . '/config/middlewares.php';
    }
    
    public function getRouterConfig(): string 
    {
        return __DIR__ . '/config/routes.php';
    }
}