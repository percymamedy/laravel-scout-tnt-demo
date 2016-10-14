<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use Searchable;
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'film_id';
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'film';
    
    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'films_index';
    }
}
