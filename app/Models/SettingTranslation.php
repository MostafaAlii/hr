<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SettingTranslation extends Model {
    use HasFactory;
    protected $table = 'setting_translations';
    protected $fillable = ['locale', 'name', 'address', 'description', 'maintenance_message'];
    public $timestamps = false;
}
