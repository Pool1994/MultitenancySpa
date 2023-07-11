<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Spatie\Multitenancy\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant
{
     use HasFactory;
     protected $fillable = [
          "name",
          "domain",
          "database"
     ];
     public static function booted()
     {
          static::created(function (Tenant $tenant) {
               $tenant->createDatabase($tenant);
               $tenant->runMigrationsSeeders($tenant);
          });
     }

     public function createDatabase($tenant)
     {
          $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?";
          $db = DB::select($query, [$tenant->database]);
          if (empty($db)) {
               DB::connection('tenant')->statement("CREATE DATABASE {$tenant->database};");
          }
     }

     public function runMigrationsSeeders($tenant)
     {
          $tenant->refresh();
          Artisan::call('tenants:artisan', [
               'artisanCommand' => 'migrate --database=tenant --seed --force',
               '--tenant' => "{$tenant->id}"
          ]);
     }
     public function setNameAttribute($value)
     {
          $host = parse_url(config("app.url"), PHP_URL_HOST);
          $subdomain = str_replace(" ", "", strtolower($value));
          $this->attributes['name'] = $value;
          $this->attributes['domain'] = "$subdomain.$host";
          $this->attributes['database'] = "tenancy_$subdomain";
     }
}