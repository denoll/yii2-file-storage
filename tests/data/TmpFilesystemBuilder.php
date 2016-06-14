<?php
namespace denoll\filekit\tests\data;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use denoll\filekit\filesystem\FilesystemBuilderInterface;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class TmpFilesystemBuilder implements FilesystemBuilderInterface
{

    /**
     * @return mixed
     */
    public function build()
    {
        return new Filesystem(new Local(sys_get_temp_dir()));
    }
}
