<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Inquiry extends Model
{
use HasFactory; protected $fillable = ['name', 'e-mail'];
public static $rules = array(
'name' => 'required',
'e-mail' => 'required'
);
public function getDetail()
{
$txt = 'ID:'.$this->id . ' ' . $this->name.$this->e-mail; return $txt;
}
}
