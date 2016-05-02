<?php

namespace ImportBundle\Checker;


class DateChecker
{
    public function isNew($priceDate) {
        $currentDate = date("Y-m-d");
        if ($priceDate== $currentDate) return false;
        return true;
    }
}