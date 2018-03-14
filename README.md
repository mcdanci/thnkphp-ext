# ThinkPHP Extension
ThinkPHP extension.

Component List:
- Log Driver for Database

## Log Driver for Database
Usage Steps:
1. 建立 migrate.
2. 建立 model (*optional*).

---
建立 migrate:
``` php
class CreateLogTable extends \McDanci\ThinkPHP\database\migrates\CreateLogTable
{
}
```

---
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
