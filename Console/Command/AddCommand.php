<?php

namespace Genmato\ByteTraining\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ListCommand extends Command
{

    protected function configure()
    {
        $this->setName('training:list')->setDescription('Genmato Training List');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('OK!');
    }
}