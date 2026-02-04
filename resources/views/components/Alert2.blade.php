<div {{$attributes->(['class'=>'p-4 text-sm rounded-lg'.$class])}} role="alert">
 <!-- Sirve para concatenar clase + -->
    <span class="font-medium">{{$title ?? "No existe valor del title"}}</span> {{$slot}}
    {{$atributes}}
</div>