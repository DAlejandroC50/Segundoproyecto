<div>
    <?php //Se recibe dos atributos los cuales son type y slot, este ultimo es el texto que va dentro del botón ?>
    <!-- La plantilla en la que me basó para construir el botón en base a la vista llamadocomponente -->
    <!-- Con merge defino los valores predeterminados y lo concateno con los atributos que se reciben-->
    <button type="button" {{$attributes->merge(['class'=>'mb-3 btn btn-'.$type])}}>{{$slot}}</button>
    {{$attributes}}
    {{$type}}
</div>