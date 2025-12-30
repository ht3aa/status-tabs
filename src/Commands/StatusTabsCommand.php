<?php

namespace Ht3aa\StatusTabs\Commands;

use Illuminate\Console\Command;

class StatusTabsCommand extends Command
{
    public $signature = 'status-tabs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
