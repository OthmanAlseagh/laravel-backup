<?php

namespace Spatie\Backup\Commands;

use Illuminate\Console\Command;
use Spatie\Backup\Helpers\ConsoleOutput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BaseCommand extends Command
{
    public function run(InputInterface $input, OutputInterface $output)
    {
        app(ConsoleOutput::class)->setOutput($this);

        parent::run($input, $output);
    }
}