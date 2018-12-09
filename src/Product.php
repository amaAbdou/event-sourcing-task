<?php
namespace App;

class Product
{
    public const STATUS_PENDING = 10;
    public const STATUS_SHIPPED = 20;
    public const STATUS_DELIVERED = 30;

    /** @var int */
    private $orderId;
    /** @var int */
    private $status;
    /** @var \DateTimeInterface */
    private $shipDate;
    /** @var \DateTimeInterface */
    private $deliverDate;

    
}