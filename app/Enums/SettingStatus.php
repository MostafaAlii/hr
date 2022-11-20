<?php
namespace App\Enums;
enum SettingStatus:string {
    case Active = 'active';
    case Inactive = 'inactive';
    case Maintenance = 'maintenance';
}
