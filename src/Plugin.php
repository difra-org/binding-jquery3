<?php

declare(strict_types=1);

namespace Difra\Jquery3;

use Difra\Debugger;
use Difra\Envi\Action;
use Difra\Events\Event;
use Difra\Events\System;

/**
 * Class Plugin
 * @package Difra\Plugins\Jquery3
 */
class Plugin extends \Difra\Plugin
{
    /**
     * @inheritdoc
     */
    protected function init(): void
    {
        System::getInstance(Event::EVENT_RENDER_INIT)->registerHandler([static::class, 'addHTML']);
    }

    public static function addHTML(Event $event)
    {
        $html = Action::getController()->html;
        if (Debugger::isEnabled()) {
            $html->getHead()->addScript('/jquery3/jquery.js');
        } else {
            $html->getHead()->addScript('/jquery3/jquery.min.js');
        }
    }
}

