<?php
namespace Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected $collection;
    protected $bucket;

    public function __construct()
    {
        parent::__construct();
        $this->collection = 'basecollection';
        $this->bucket     = 'basebucket';
        $this->password = '%gVZ8*5aONL6O#x7TEydEHX35Oo2@@';
    }
}