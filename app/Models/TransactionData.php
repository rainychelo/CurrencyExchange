<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use PhpParser\Node\Scalar\String_;

class TransactionData
{
    protected float $mount;
    protected String $localCurrency;
    protected String $foreignerCurrency;
    protected Date $date;
    protected float $exchangedMount;

    /**
     * @param float $mount
     * @param String $localCurrency
     * @param String $foreignerCurrency
     * @param Date $date
     */
    public function __construct(float $mount, string $localCurrency, string $foreignerCurrency, Date $date)
    {
        $this->mount = $mount;
        $this->localCurrency = $localCurrency;
        $this->foreignerCurrency = $foreignerCurrency;
        $this->date = $date;
    }

    /**
     * @return float
     */
    public function getMount(): float
    {
        return $this->mount;
    }

    /**
     * @param float $mount
     */
    public function setMount(float $mount): void
    {
        $this->mount = $mount;
    }

    /**
     * @return String
     */
    public function getLocalCurrency(): string
    {
        return $this->localCurrency;
    }

    /**
     * @param String $localCurrency
     */
    public function setLocalCurrency(string $localCurrency): void
    {
        $this->localCurrency = $localCurrency;
    }

    /**
     * @return String
     */
    public function getForeignerCurrency(): string
    {
        return $this->foreignerCurrency;
    }

    /**
     * @param String $foreignerCurrency
     */
    public function setForeignerCurrency(string $foreignerCurrency): void
    {
        $this->foreignerCurrency = $foreignerCurrency;
    }

    /**
     * @return Date
     */
    public function getDate(): Date
    {
        return $this->date;
    }

    /**
     * @param Date $date
     */
    public function setDate(Date $date): void
    {
        $this->date = $date;
    }

    /**
     * @return float
     */
    public function getExchangedMount(): float
    {
        return $this->exchangedMount;
    }

    /**
     * @param float $exchangedMount
     */
    public function setExchangedMount(float $exchangedMount): void
    {
        $this->exchangedMount = $exchangedMount;
    }



}
