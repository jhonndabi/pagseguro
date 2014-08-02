<?php
namespace PHPSC\PagSeguro\Environments;

use PHPSC\PagSeguro\Environment;

/**
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 */
class Sandbox extends Environment
{
    const HOST = 'sandbox.pagseguro.uol.com.br';

    const WS_HOST = 'ws.sandbox.pagseguro.uol.com.br';

    /**
     * {@inheritdoc}
     */
    protected function getHost()
    {
        return static::HOST;
    }

    /**
     * {@inheritdoc}
     */
    protected function getWsHost()
    {
        return static::WS_HOST;
    }
}
