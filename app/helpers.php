<?php

use App\AdminNavigation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


/**
 * @param $errors
 *
 * @return string
 */
function showError($errors)
{
    return '<div class="invalid-feedback text-right m-2">' . $errors . '</div>';
}


/**
 * @param $type
 * @param $message
 *
 * @return bool
 */
function toast($type, $message) {
    request()->session()->flash('toast', true);
    request()->session()->flash($type, $message);
    return true;
}

function navigation(){

    $userRole = request()->user()->roles()->first();
    return AdminNavigation::with([
        'children'=>function($q) use ($userRole) {
            $q->whereIn('slug',$userRole->permissions->pluck('slug'));
            $q->whereActive(1);
            $q->orWhereHas('children',function ($q) use ($userRole) {
                $q->whereIn('slug',$userRole->permissions->pluck('slug'));
                $q->whereActive(1);
            });
        },
        'children.children'=>function($q) use ($userRole) {
            $q->whereIn('slug',$userRole->permissions->pluck('slug'));
            $q->whereActive(1);
        }
    ])->where(function ($q) use ($userRole) {
        $q->whereHas('children',function ($q) use ($userRole) {
            $q->whereIn('slug',$userRole->permissions->pluck('slug'));
            $q->whereActive(1);
            $q->orWhereHas('children',function ($q) use ($userRole) {
                $q->whereIn('slug',$userRole->permissions->pluck('slug'));
                $q->whereActive(1);
            });
        });
    })->OnlyParent()->whereActive(1)->get();
}

function active_language() {
    return session('active_language') ?? 'en';
}

function create_by($by){
    switch ($by){
        case 0: return 'Default';
        default: return User::find($by)->name;
    }
}

function navigation_type($type){
    switch ($type){
        case 1: return 'Label Group Navigations';
        case 2: return 'Main Navigation';
        case 3: return 'Children of Navigation';
        default: return '';
    }
}

