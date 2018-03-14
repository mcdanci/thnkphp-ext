<?php
/**
 * @copyright since 15:50 18/12/2017
 * @author <mc@dancis.info>
 */
namespace McDanci\ThinkPHP;

/**
 * Class Model
 * @package McDanci\ThinkPHP
 *
 * @todo
 * @method static Model get($data, $with = [], $cache = false)
 */
class Model extends \think\Model
{
    //region Common

    const
        ORDER_ASC = 'asc',
        ORDER_DESC = 'desc';

    const DATETIME = 'datetime';

    const FORMAT_MYSQL_DATETIME = 'Y-m-d H:i:s';

    const DELETED = 'deleted';

    /**
     * @todo
     */
    const TIME_CREATED = '';
    const TIME_UPDATED = '';
    const TIME_UPDATE = '';

    /**
     * @var string Field for time
     */
    protected
        $createTime = 'created',
        $updateTime = 'updated';

    //endregion Common
}
