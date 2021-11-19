<?php

namespace App\Repositories;

use App\Models\Likes;
use App\Repositories\BaseRepository;

/**
 * Class LikesRepository
 * @package App\Repositories
 * @version November 18, 2021, 11:54 pm UTC
*/

class LikesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_id',
        'user_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Likes::class;
    }
}
