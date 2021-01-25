<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class Component extends Model
{
    use HasFactory;

    public static $filters = [];

    /**
     * Return Eloqent query builder with filtered compatible components
     *
     * @param Request $request
     * @return Builder
     */
    public static function filter(Request $request): Builder
    {

        $component = self::select("*");

        foreach (static::$filters as $filter) {
            switch ($filter['type']) {
                case 'radio':
                    $selected = $request->input($filter['name']);
                    if ($selected) {
                        $component = $component->where($filter['name'], $selected);
                    }
                    break;
                case 'range':
                    $min = $request->input($filter['name'] . "_min");
                    $max = $request->input($filter['name'] . "_max");
                    if ($min && $max)
                        $component = $component->whereBetween($filter['name'], [$min, $max]);
                    break;
                case 'checkbox':
                    $selected = $request->input($filter['name']);
                    if ($selected)
                        $component = $component->whereIn($filter['name'], $selected);
                    break;
            }
        }

        return $component;
    }

    /**
     * Return Eloqent query builder with filtered compatible components
     *
     * @param array $list list of compatible spec
     * @return Builder
     */
    public static function compatible(array $list): Builder
    {
        $component = self::select("*");

        foreach ($list as $field => $allowed) {
            $component = $component->whereIn($field, $allowed);
        }

        return $component;
    }

    /**
     * Check if component is compatibile with provided spec
     *
     * @param array $list list of compatible spec
     * @return bool
     */
    public function isCompatible(array $list): bool
    {
        $is = true;

        foreach ($list as $key => $value) {
            if (!in_array($this->$key, $value))
                $is = false;
        }

        return $is;
    }

    public static function getClosest($estimatedPrice, $components)
    {

        if (count($components) == 1)
            return $components->first();
        else
        {
            $diff = PHP_INT_MAX;
            $returned = 0;
            foreach ($components as $component) {
                if (abs($estimatedPrice - $component['price'] <= $diff)) {
                    $diff = abs($estimatedPrice - $component['price']);
                    $returned = $component;
                }
            }

            return $returned;
        }


    }
}
