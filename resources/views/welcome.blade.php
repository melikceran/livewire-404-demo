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

    
    <h1>Welcome Page</h1>

    @livewire('navigation')
    @livewire('content')

    
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