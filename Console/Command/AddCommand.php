<?php

namespace Genmato\ByteTraining\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Genmato\ByteTraining\Model\TrainingFactory;

class AddCommand extends Command
{
    protected $trainingFactory;

    public function __construct(
        TrainingFactory $trainingFactory
    ) {
        $this->trainingFactory = $trainingFactory;
        parent::__construct('training:add');
    }

    protected function configure()
    {
        $this->setName('training:add')
            ->setDescription('Genmato Training Add')
            ->addArgument('name', InputArgument::REQUIRED, 'Name');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');

        $training = $this->trainingFactory->create();
        $training->setName($name);
        $training->save();

        $output->writeln($training->getName());
    }
}