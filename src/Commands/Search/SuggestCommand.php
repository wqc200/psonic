<?php

namespace Psonic\Commands\Search;

use Psonic\Commands\Command;

final class SuggestCommand extends Command
{
    private $command    = 'SUGGEST';
    private $parameters = [];

    /**
     * SuggestCommand constructor.
     * @param string $collection
     * @param string $bucket
     * @param string $terms
     * @param null $limit
     */
    public function __construct(string $collection, string $bucket, string $terms, $limit = null, $locale=null)
    {
        $this->parameters = [
            'collection' => $collection,
            'bucket'     => $bucket,
            'terms'      => quote($terms),
            'limit'      => $limit ? "LIMIT($limit)" : null,
            'locale'      => $locale ? "LIMIT($locale)" : null,
        ];

        parent::__construct($this->command, $this->parameters);
    }
}