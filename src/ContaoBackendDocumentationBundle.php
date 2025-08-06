<?php

declare(strict_types=1);

/*
 * (c) INSPIRED MINDS
 */

namespace InspiredMinds\ContaoBackendDocumentation;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoBackendDocumentationBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
