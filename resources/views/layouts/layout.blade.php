<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Todo Manager' }}</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<x-header />
{{ $slot }}

<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
