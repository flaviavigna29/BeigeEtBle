<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo messaggio da {{ $contactMail['name'] }}</title>
</head>
<body>
    <h2>Nuovo messaggio da: {{ $contactMail['name'] }} {{ $contactMail['surname'] }}</h2>
    <p><strong>Email:</strong> {{ $contactMail['email'] }}</p>
    <p><strong>Oggetto:</strong> {{ $contactMail['option'] }}</p>
    <p><strong>Numero di prenotazione:</strong> {{ $contactMail['number'] ?? 'Non specificato' }}</p>
    <p><strong>Messaggio:</strong></p>
    <p>{{ $contactMail['message'] }}</p>
</body>
</html>
