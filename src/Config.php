<?php
/**
 * @copyright since 15:49 2/11/2017
 * @author <mc@dancis.info>
 */
namespace McDanci\ThinkPHP;

/**
 * Configuration Operation
 * @package McDanci\ThinkPHP
 */
class Config extends \think\Config
{
    /**
     * Configuration name.
     * @todo
     */
    const
        APP_TRACE = 'app_trace',

        TIMEZONE_DEFAULT = 'default_timezone',

        LANG_SWITCH = 'lang_switch_on',
        LANG_DEFAULT = 'default_lang',

        TEMPLATE_SUCCESS = 'dispatch_success_tmpl',
        TEMPLATE_ERROR = 'dispatch_success_tmpl',

        RETURN_TYPE_DEFAULT = 'default_return_type',

        APP_STATUS = 'app_status',

        NAME_MODULE_DEFAULT = 'default_module',
        NAME_CONTROLLER_DEFAULT = 'default_controller',
        NAME_ACTION_DEFAULT = 'default_action';

    /**
     * Configuration name - database related.
     */
    const
        DB_HOST = 'hostname',
        DB_USER = 'username',
        DB_PASSWORD = 'password',
        DB_NAME = 'database',
        DB_PREFIX = 'prefix',
        DB_DEBUG = 'debug';

    /**
     * Get configuration.
     *
     * Getting all configuration at once set parameter name with `null`.
     * @param null|string $name Name of configuration parameter, level separation using `.`
     * @param string $range functional range
     * @return mixed
     * @todo Test unit
     */
    public static function get($name = null, $range = '')
    {
        if (is_string($name)) {
            $keyList = explode('.', $name);
            $counter = count($keyList);
            if ($counter > 2) {
                $configValue = parent::get($keyList[0] . '.' . $keyList[1], $range);

                for ($c = 2; $c < $counter; $c++) {
                    $configValue = $configValue[$keyList[$c]];
                }

                return $configValue;
            }
        }
        return parent::get($name, $range);
    }

    /**
     * Concat. configuration name.
     * @param $link
     * @return string
     */
    public static function cN($link)
    {
        return implode('.', $link);
    }
}
