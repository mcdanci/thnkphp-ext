<?php
namespace McDanci\ThinkPHP\database\migrates;

use think\migration\Migrator;
use McDanci\ThinkPHP\Phinx;

abstract class CreateLogTable extends Migrator
{
    /**
     * Create table of order for application system log.
     * @todo Set `id(10)` into `unsigned`
     */
    public function change()
    {
        $this->table('log', [
            Phinx::TABLE_COLLATION => Phinx::TABLE_COLLATION_U8MG,
            Phinx::SIGNED => false,
        ])
            ->addColumn(Phinx::CREATED, Phinx::COL_TYP_DATETIME, [Phinx::COL_OPT_NULL => false])
            ->addColumn(Phinx::DELETED, Phinx::COL_TYP_DATETIME, [Phinx::COL_OPT_NULL => true])
            ->addColumn('msg', Phinx::COL_TYP_STRING, [
                Phinx::COL_OPT_NULL => false,
            ])
            ->addColumn('extra', Phinx::COL_TYP_TEXT, [
                Phinx::COL_OPT_NULL => true,
                Phinx::COMMENT => 'Extra data in JSON',
            ])
            ->create();
    }
}
