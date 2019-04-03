<?php

namespace Psonic\Concretes\Commands\Ingest;

use Psonic\Concretes\Commands\Command;

class FlushObjectCommand extends Command
{
    private $command    = 'FLUSHO';
    private $parameters = [];

    public function __construct(string $collection, string $bucket, string $object)
    {
        $this->parameters = [
            'collection' => $collection,
            'bucket'     => $bucket,
            'object'     => $object,
        ];

        parent::__construct($this->command, $this->parameters);
    }
}