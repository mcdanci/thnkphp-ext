<?php
/**
 * @copyright since 18:05 13/3/2018
 * @author <mc@dancis.info>
 */
namespace McDanci\ThinkPHP\Driver\Log;

use think\Log;
use \McDanci\ThinkPHP\app\common\model;

/**
 * Class DB
 * @package McDanci\ThinkPHP\Driver\Log
 */
class DB implements __Interface
{
    const
        IDX_MSG = 0,
        IDX_EXTRA = 1;

    /**
     * Storage.
     *
     * Message 可为不可反序列化的 string，或經序列化後的 string 和包含不多於兩個元素的 array。
     * @param array $log
     * @return bool
     */
    public function save(array $log = [])
    {
        if ($log) {
            if (array_key_exists(Log::LOG, $log)) {
                $logList = [];

                foreach ($log[Log::LOG] as &$log) {
                    $logData = [];

                    if (in_array($logDataType = gettype($log), ['string', 'array'])) {
                        if (is_string($log)) {
                            $logData['msg'] = $log;
                        } elseif (is_array($log)) {
                            switch (count($log)) {
                                case 2:
                                    $logData['extra'] = json_encode($log[self::IDX_EXTRA]);
                                default:
                                    $logData['msg'] = $log[self::IDX_MSG];
                            }
                        }
                    }

                    if ($logData) {
                        $logList[] = $logData;
                    }
                }

                if ($logList) {
                    return (bool)(new model\Log)->saveAll($logList);
                }
            }
        }

        return false;
    }
}
