<?php

declare(strict_types=1);

namespace SmitBackend\PanelBridge\Contracts;

/**
 * Interface ServerProvisionerInterface
 *
 * @package SmitBackend\PanelBridge
 */
interface ServerProvisionerInterface
{
    public function execute(array $payload = []): mixed;
}
