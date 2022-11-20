<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\SettingStatus;
use Astrotomic\Translatable\Translatable;
class Setting extends Model {
    use HasFactory, Translatable;
    protected $table = 'settings';
    protected $fillable = ['logo', 'phone', 'email', 'facebook', 'twitter', 'instagram', 'youtube', 'linkedin', 'status'];
    public array $translatedAttributes = ['name', 'address', 'description', 'maintenance_message'];
    protected $with = ['translations'];
    protected $casts = ['status' => SettingStatus::class];
}
