<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h3>halo</h3>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <x-card>
                    <x-slot name='image'>
                        <img src="https://images.unsplash.com/photo-1742730709645-448101d10586?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="img 1">
                    </x-slot>
                    <x-slot name="title">
                        <h5 class="card-title">Title</h5>
                    </x-slot>
                </x-card>
            </div>
            <div class="col-md-4">
                <x-card>
                    <x-slot name='image'>
                        <img src="https://images.unsplash.com/photo-1742730709645-448101d10586?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="img 1">
                    </x-slot>
                    <x-slot name="title">
                        <h5 class="card-title">Title</h5>
                    </x-slot>
                </x-card>
            </div>
            <div class="col-md-4">
                <x-card>
                    <x-slot name='image'>
                        <img src="https://images.unsplash.com/photo-1742238861697-b54509120e13?q=80&w=1390&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="img 1">
                    </x-slot>
                    <x-slot name="title">
                        <h5 class="card-title">Title</h5>
                    </x-slot>
                </x-card>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
</script>

</html>
