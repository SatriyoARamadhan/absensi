<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
	protected $table = "table_gurus";
    protected $fillable =['nip','nama','mapel','user_id'];
}
