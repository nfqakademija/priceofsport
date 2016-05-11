<?php

namespace ImportBundle\Command;

use ImportBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class NotificationsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('send:notifications');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $subscribersInfo = $this->getContainer()->get('notification.data.parser');
        $getSubscribers = $subscribersInfo->getUsers();

        foreach($getSubscribers as $subscriber) {
            /** @var Notification $item */
            $productInfo = $subscriber->getProducts();

            // padaryti konvertuota kaina

            if ($productInfo->getPrice() < $subscriber->getPrice()) {
                $message = $subscribersInfo->updateUserInfo($productInfo->getId(), $productInfo->getPrice(), $subscriber->getPrice());
                $output->writeln($message);
            }
        }
    }
}