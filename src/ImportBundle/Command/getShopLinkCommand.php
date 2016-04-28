<?php
namespace ImportBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class getShopLinkCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('get:shoplink')
            ->setDescription('Get link from shop db')
            ->addArgument(
                'id',
                InputArgument::REQUIRED,
                'shop id'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $id = $input->getArgument('id');

        $em = $this->getContainer()->get('doctrine')->getManager();
        $link = $em->getRepository('ImportBundle:Shop')->find($id);

        $output->writeln("The link is: ".$link->getShopLink());


    }
}