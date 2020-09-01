<?php
/*
 * PepipostLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PepipostLib\Models;

use JsonSerializable;

/**
 *Setrecurringcreditddetails modal
 */
class UpdaterecurringCredisofsubaccount implements JsonSerializable
{
    /**
     * The username of the subaccount
     * @var string|null $username public property
     */
    public $username;

    /**
     * The amount to be added periodically
     * @maps recurring_credit
     * @var integer|null $recurringCredit public property
     */
    public $recurringCredit;

    /**
     * The periodic \n\nAllowed values  \"daily\", \"weekly\", \"monhtly\"
     * @var string|null $timeperiod public property
     */
    public $timeperiod;

    /**
     * The date from which the credit allocation will commence
     * @maps start_date
     * @var string|null $startDate public property
     */
    public $startDate;

    /**
     * The last date of credit allocation
     * @maps end_date
     * @var string|null $endDate public property
     */
    public $endDate;

    /**
     * Flag to enable or disable the recurring credit allocation
     * @var string|null $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $username        Initialization value for $this->username
     * @param integer $recurringCredit Initialization value for $this->recurringCredit
     * @param string  $timeperiod      Initialization value for $this->timeperiod
     * @param string  $startDate       Initialization value for $this->startDate
     * @param string  $endDate         Initialization value for $this->endDate
     * @param string  $status          Initialization value for $this->status
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->username        = func_get_arg(0);
            $this->recurringCredit = func_get_arg(1);
            $this->timeperiod      = func_get_arg(2);
            $this->startDate       = func_get_arg(3);
            $this->endDate         = func_get_arg(4);
            $this->status          = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['username']         = $this->username;
        $json['recurring_credit'] = $this->recurringCredit;
        $json['timeperiod']       = $this->timeperiod;
        $json['start_date']       = $this->startDate;
        $json['end_date']         = $this->endDate;
        $json['status']           = $this->status;

        return $json;
    }
}