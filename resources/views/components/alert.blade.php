@props(['type'=>'Info'])
@php
    switch ($type) {
        case 'Info':
            $title = $title ?? 'Info alert';# code...
            $class="text-blue-800 bg blue-50 dark:text-blue-300";
            break;
         case 'Danger':
            $title = $title ?? 'Damger alert';# code...
            $class="text-red-800 bg red-50 dark:text-red-300";
            break;
         case 'Warning':
            $title = $title ?? 'Info alert';# code...
            $class="text-blue-800 bg blue-50 dark:text-blue-300";
            break;
         case 'Info':
            $title = $title ?? 'Info alert';# code...
            $class="text-blue-800 bg blue-50 dark:text-blue-300";
            break;
        
        default:
            # code...
            break;
    }