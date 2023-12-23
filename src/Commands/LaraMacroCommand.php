<?php

namespace Weward\LaraMacro\Commands;

use Illuminate\Console\Command;

class LaraMacroCommand extends Command
{
    public $signature = 'laramacro';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
