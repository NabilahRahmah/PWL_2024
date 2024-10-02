<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user';        // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id';  //Mendefinisikan primary key dari tabel yang digunakan

     /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */

    // JS 4 PRAK1
        // protected $fillable = ['level_id', 'username', 'nama', 'password'];
        protected $fillable = ['level_id', 'username', 'nama', 'password'];

    //JS 4 PRAKTIKUM 2.7
    public function level(): BelongsTo {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }    
}