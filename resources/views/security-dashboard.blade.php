<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de seguridad</title>
</head>
<body>
    <h1>Panel de seguridad (Últimas 24h)</h1>
    <p>Exitosos: {{ $stats['success'] }}</p>
    <p>Fallidos: {{ $stats['failed'] }}</p>
    <p>Bloqueados: {{ $stats['blocked'] }}</p>

    <h3>IPs sospechosas (Últimos 5 minutos)</h3>
    <table border="1" cellpadding="6">
        <tr>
            <th>IP</th>
            <th>Fallos</th>
            <th>Estado</th>
        </tr>
        @foreach($suspiciousIps as $item)
        <tr>
            <td>{{ $item->ip_address }}</td>
            <td>{{ $item->total }}</td>
            <td>{{ $item->total >= 5 ? 'CRÍTICO (Bloqueado)' : 'ALERTA' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
