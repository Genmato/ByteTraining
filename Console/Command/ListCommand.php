<?php

namespace Genmato\ByteTraining\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Genmato\ByteTraining\Model\ResourceModel\Training\CollectionFactory as TrainingCollectionFactory;

class ListCommand extends Command
{

    public function __construct(
        TrainingCollectionFactory $trainingFactory
    ) {
        $this->trainingFactory = $trainingFactory;
        parent::__construct('training:list');
    }

    protected function configure()
    {
        $this->setName('training:list')->setDescription('Genmato Training List');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $collection = $this->trainingFactory->create();

        foreach ($collection as $item) {
            $output->writeln($item->getName());
        }

        $output->writeln('OK!');
    }
}