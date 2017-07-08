<!DOCTYPE html>
<html>
    <head>
        <title>Compra realizada</title>
    </head>
    <body>
        <p><strong>Email: </strong>{{ $email }}</p>
        <p><strong>Asunto: </strong>{{ $subject }}</p>
        <p><strong>Mensaje: </strong><p>
        <div class="container">
            <p>Tu pedido se está procesando, aquí te dejamos los datos de tu compra:</p>
            <p>Código del pedido: {{ $bodyOrder->payment }}</p>
            <p>Contenido del pedido:</p>
            @foreach($bodyOrderlines as $bodyOrderline)
                @if($bodyOrderline->quantity == 1)
                    <p>{{ $bodyOrderline->quantity }} unidad del instrumento {{ $bodyOrderline->instrument->name }} => {{ $bodyOrderline->getSubtotal() }}€</p>
                @else
                    <p>{{ $bodyOrderline->quantity }} unidades del instrumento {{ $bodyOrderline->instrument->name }} => {{ $bodyOrderline->getSubtotal() }}€</p>
                @endif
            @endforeach
            <p>Precio total del pedido: {{ $bodyOrder->getTotal() }}€</p>
        </div>
    </body>
</html>