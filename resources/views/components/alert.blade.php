@props(['type'=>'Info']) <!-- Si en dado caso no le pasamos el valor de $type el valor por defecto es info-->
<!-- Todo lo que se encuentre en esta directiva se va a trabajar con código php-->
@php
    switch ($type) {
        case 'Info':
        //Concatenamos el valor de variable validando que el contenido sea igual
        //  al caso que se está leyendo en esos momentos
            $title = $title ?? 'Info alert';# code...
            $class="text-blue-800 bg blue-50 dark:text-blue-300";
            break;
         case 'Danger':
            $title = $title ?? 'Damger alert';# code...
            $class="text-red-800 bg red-50 dark:text-red-300";
            break;
         case 'Warning':
            $title = $title ?? 'Warning alert';# code...
            $class="text-yellow-800 bg yellow-50 dark:text-yellow-300";
            break;
         case 'Success':
            $title = $title ?? 'Success alert!';# code...
            $class="text-green-800 bg green-50 dark:text-green-300";
            break;
        
        default:
            $title = $title ?? 'Info alert';# code...
            $class="text-blue-800 bg blue-50 dark:text-blue-300";
    }
@endphp
<div {{$attributes->merge(['class'=>'p-4 text-sm rounded-lg'.$class])}} role="alert">
    <!-- Podemos imprimir los atributos que se le pasan y mediante la función merge unimos-->
    <p>{{$attributes}}
        {{$type}}
    </p>
</div>