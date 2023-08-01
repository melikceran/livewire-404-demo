<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @livewireStyles
</head>
<body>

    
    <h1>Example Page</h1>

    @livewire('navigation')

    <script type="module">
        document.addEventListener('livewire:init', () => {
            setInterval(() => {
                Livewire.dispatch("refreshNavigation");
                Livewire.dispatch("refreshContent");
            }, 2000);
        });
    </script>
    
    @livewireScripts
</body>
</html>