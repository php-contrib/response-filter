<?php

declare(strict_types=1);

namespace PhpContrib\Http\Message;

use Psr\Http\Message\ResponseInterface;

/**
 * Provides support for swapping implementations
 */
interface ResponseFilterStrategyInterface
{
    /**
     * Execute the algoritm defined by the strategy
     */
    public function algorithm(ResponseInterface $response): ResponseInterface;
}
