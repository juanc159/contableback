<?php

namespace App\Repositories;

use App\Models\Currency;

class CurrencyRepository extends BaseRepository
{
    public function __construct(Currency $modelo)
    {
        parent::__construct($modelo);
    }
    
}
