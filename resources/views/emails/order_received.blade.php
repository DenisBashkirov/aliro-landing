<h2>Поступила заявка с сайта {{ env('APP_NAME') }}</h2>

<table style="border: none;">
    <tr>
        <td><p>Тип заявки:</p></td>
        <td><p style="font-weight: bold">{{ $order->type->name }}</p></td>
    </tr>
    <tr>
        <td><p>Имя клиента:</p></td>
        <td><p style="font-weight: bold">{{ $order->client_name }}</p></td>
    </tr>
    <tr>
        <td><p>Телефон клиента:</p></td>
        <td style="font-weight: bold"><p>{{ $order->client->phone }}</p></td>
    </tr>
</table>

<p style="opacity: .8;">Источник заявки: <a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a></p>