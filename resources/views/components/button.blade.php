<div>
    <!-- La plantilla en la que me basó para construir el botón en base a la vista llamadocomponente -->
    <button type="button" {{$attributes->merge(['class'=>'mb-3 btn btn-'.type])}}>{{$slot}}</button>
</div>