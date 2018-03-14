# ThinkPHP Extension
ThinkPHP extension.

Component List:
- Log Driver for Database

## Log Driver for Database
Usage Steps:
1. New a migrate.
2. New a model (*optional*).

---
New a migrate:
``` php
class CreateLogTable extends \McDanci\ThinkPHP\database\migrates\CreateLogTable
{
}
```

---
New a model:
``` php
namespace app\common\model;

class Log extends \McDanci\ThinkPHP\app\common\model\Log
{}
```

---
Call:
``` php
use think\Log;

Log::init(['type' => '\McDanci\ThinkPHP\Driver\Log\DB']);
Log::record('String', Log::LOG);
Log::record(['String too'], Log::LOG);
Log::record(['String with extra', 'Extra information'], Log::LOG);
```
