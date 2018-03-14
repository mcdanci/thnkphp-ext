<?php
/**
 * @copyright since 10:15 14/3/2018
 * @author <mc@dancis.info>
 */
namespace McDanci\ThinkPHP\app\common\model;

use McDanci\ThinkPHP\Model;
use traits\model\SoftDelete;

class Log extends Model
{
    //region Configuration

    use SoftDelete;

    protected
        $autoWriteTimestamp = self::DATETIME,
        $deleteTime = 'deleted';

    protected $updateTime = false;

    public function getExtraAttr($value)
    {
        if ($extra = json_decode($value, true)) {
            $value = $extra;
        }

        return $value;
    }

    //endregion
}
