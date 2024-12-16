<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel AlpineJS</title>

    @vite(['resources/js/app.js', 'resources/js/alpine.js'])
</head>
<body>
    <div x-data="{ counter: 0 }" class="counter">
        <h1 x-text="counter"></h1>
        <button @click="counter++">Increment</button>
    </div>
</body>
</html>