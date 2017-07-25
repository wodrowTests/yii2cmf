<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/6/16
 * Time: 下午9:57
 */

/**
 * 任务调度
 * crontab -e * * * * * php /path/to/yii schedule/run  1>> /dev/null 2>&1
 * @see
 */

// $schedule->command('migrate')->cron('* * * * *');

// $schedule->exec('composer self-update')->daily();

$schedule->exec('migrate/dump')->daily(); // 每天执行一次数据库导出迁移
$schedule->exec('ls -al > tt.txt')->cron('* * * * *'); // test