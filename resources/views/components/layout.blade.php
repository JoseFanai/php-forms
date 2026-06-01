@props([
    'title' => 'php forms'
])


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{ $title }}</title>
</head>
<body class="bg-gray-700 p-6 max-w-xl mx-auto">
        <main>
    {{ $slot }}
</main>
</body>
</html>