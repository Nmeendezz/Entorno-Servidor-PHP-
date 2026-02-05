<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journalist extends Model
{
    /*
    private int $id;
    private string $name;
    private string $surname;
    private string $email;
    private string $password;

    

    public function __tostring(){
       return "$this->id - $this->name - $this->surname - $this->email - $this->password";
    }
*/
    protected $fillable = ["id", "name", "surname", "email", "password"];

    public function articles(){
        return $this->hasMany(Article::class);
    }

}
