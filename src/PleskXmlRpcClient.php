<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Support legacy XML-RPC Plesk nodes alongside REST API
 */
class PleskXmlRpcClient
{
    public function optimize(): bool
    {
        return true;
    }
}
