<?php
/**
 * @copyright since 18:09 13/3/2018
 * @author <mc@dancis.info>
 */
namespace McDanci\ThinkPHP\Driver\Log;

/**
 * Interface __Interface
 * @package McDanci\ThinkPHP\Driver\Log
 * @see \think\log\driver\Test
 */
interface __Interface
{
    const TYPE = 'type';

    /**
     * Log writer.
     * @param array $log Log information.
     * @return bool
     */
    public function save(array $log = []);
}
