<?php

// app/Core/QueryBuilderWithCache.php
 
namespace App\Core;
 
use Cache;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Database\Query\Processors\Processor;
use Illuminate\Database\Query\Builder as QueryBuilder;
 
class QueryBuilderWithCache extends QueryBuilder
{
    protected $cacheTime;
    
    // Viết lại hàm __construct() để truyền thêm biến $cacheTime
    public function __construct(
        ConnectionInterface $connection,
        Grammar $grammar = null,
        Processor $processor = null,
        int $cacheTime = 0
    ) {
        $this->cacheTime = $cacheTime;
        parent::__construct($connection, $grammar, $processor);
    }
}