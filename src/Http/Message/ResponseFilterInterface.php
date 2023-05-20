<?php

declare(strict_types=1);

namespace Phpolar\Http\Message;

use Psr\Http\Message\ResponseInterface;

/**
 * Provides support for altering responses
 */
interface ResponseFilterInterface
{
    /**
     * Alter the repsponse
     */
    public function filter(ResponseInterface $response): ResponseInterface;
}
