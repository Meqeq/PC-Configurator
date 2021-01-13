<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class Component extends Model {
    use HasFactory;

    public static $filters = [];

    public static function filter(Request $request) {
        
        $component = self::select("*");

        foreach(static::$filters as $filter) {
            switch($filter['type']) {
                case 'radio':
                    $selected = $request->input($filter['name']);
                    if($selected) {
                        $component = $component->where($filter['name'], $selected);
                    }
                    break;
                case 'range':
                    $min = $request->input($filter['name']."_min");
                    $max = $request->input($filter['name']."_max");
                    if($min && $max) 
                        $component = $component->whereBetween($filter['name'], [$min, $max]);
                    break;
                case 'checkbox':
                    $selected = $request->input($filter['name']);
                    if($selected)
                        $component = $component->whereIn($filter['name'], $selected);
                    break;
            }
        }

        return $component;
    }

    public static function compatible(array $list) {
        return self::select("*");
    }
}
