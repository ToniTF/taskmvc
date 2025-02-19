<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;
class Task extends Model{
    protected $table = 'task';//por defecto es el nombre de la clase en minusculas y plural
    protected $primaryKey = 'task_id';//por defecto es id
    public $timestamps = false;//por defecto es true
    
}
?>