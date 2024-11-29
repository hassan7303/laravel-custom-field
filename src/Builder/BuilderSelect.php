<?php

namespace JobMetric\CustomField\Builder;

use JobMetric\CustomField\Fields\Select;

trait BuilderSelect
{
    /**
     * Select field
     *
     * @return Select
     */
    public static function select(): Select
    {
        self::$fieldContract = new Select;

        return self::$fieldContract;
    }
}