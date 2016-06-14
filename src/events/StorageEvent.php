<?php

namespace denoll\filekit\events;

use yii\base\Event;

/**
 * Class StorageEvent
 * @package denoll\filekit\events
 * @author Eugene Terentev <eugene@terentev.net>
 */
class StorageEvent extends Event
{
    /**
     * @var \League\Flysystem\FilesystemInterface
     */
    public $filesystem;
    /**
     * @var string
     */
    public $path;
}
