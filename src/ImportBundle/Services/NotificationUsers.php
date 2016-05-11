<?php
namespace ImportBundle\Services;

class NotificationUsers
{
    protected $import;

    protected $check;

    public function __construct($import, $check)
    {
        $this->import = $import;
        $this->check = $check;
    }

    public function getUsers()
    {
        $users = $this->check->findAll();
        if (!$users) {
            throw new \Exception(
                'No users found'
            );
        }

        return $users;
    }

    public function updateUserInfo($id, $newPrice, $oldPrice)
    {
        $notification = $this->check->find($id);

        $notification->setPrice($newPrice);

        $this->import->flush();

        //Send mail

        return "Message sent!";
    }
}