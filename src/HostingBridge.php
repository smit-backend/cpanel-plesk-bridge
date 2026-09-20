<?php

declare(strict_types=1);

namespace SmitBackend\PanelBridge;

use SmitBackend\PanelBridge\Contracts\ServerProvisionerInterface;

/**
 * Class HostingBridge
 *
 * @package SmitBackend\PanelBridge
 */
class HostingBridge implements ServerProvisionerInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
