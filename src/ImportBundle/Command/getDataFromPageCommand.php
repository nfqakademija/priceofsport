<?php
namespace ImportBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class getDataFromPageCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('get:data')
            ->setDescription('Get data from pages')
            ->addArgument(
                'link',
                InputArgument::REQUIRED,
                'Link of some page'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $link = $input->getArgument('link');

        $output->writeln("The link you typed is: ".$link);


    }
}