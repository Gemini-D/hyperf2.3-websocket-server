<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use Hyperf\Contract\OnCloseInterface;
use Hyperf\Contract\OnMessageInterface;
use Hyperf\Contract\OnOpenInterface;

class WebSocketController implements OnOpenInterface, OnMessageInterface, OnCloseInterface
{
    public function onClose($server, int $fd, int $reactorId): void
    {
        var_dump('close');
    }

    public function onMessage($server, $frame): void
    {
        var_dump($frame);
    }

    public function onOpen($server, $request): void
    {
        var_dump('open');
    }
}
