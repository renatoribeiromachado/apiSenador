<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = "api_config_senador";
    protected $fillable = ['site', 'email','description', 'phone','whatsapp', 'fantasy','adress', 'facebook','instagram', 'linkedin','google', 'vision','service'];


    public function getResults($data, $total)
    {
        if (!isset($data['filter']) && !isset($data['title']))
            return $this->paginate($total);

    }
}
