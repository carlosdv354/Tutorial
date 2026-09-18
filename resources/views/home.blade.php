<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class=" max-w-7xl mx-auto px-4">

        <h1>Bienvenido a mi tutorial</h1>
        {{-- vercion vieja de TW (3.1.2) --}}
        <x-alert type="banana" class="mb-4">
            <x-slot name="title">
                Tuto
            </x-slot>
            <x-slot name="content">
                Oli :3
        </x-slot>
        </x-alert>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.   
            
    </div>
</body>
</html>