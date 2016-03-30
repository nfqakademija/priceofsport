<?php

namespace ImportBundle\Shops;

class PaginationPrefix
{
    public function getPaginationPrefix($page) {

        return "?page=".$page;

    }
}