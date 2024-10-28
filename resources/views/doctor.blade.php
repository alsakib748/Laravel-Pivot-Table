<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pivot Table Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">

    <div class="row">

        <h1 class="text-warning text-center">Laravel Pivot Table</h1>

        @foreach ($doctors as $key => $doctor)

            <div class="col-md-12 mb-2">
                <div class="card bg-secondary text-white">
                    <div class="card-header">
                        <h3 class="text-white">#{{ $doctor->id }} Doctor Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-title"><strong>{{ $doctor->name }}</strong></div>
                        <p>{{ $doctor->department }}</p>
                        <ol>
                            @foreach ($doctor->hospitals as $hospital)
                                <li>{{ $hospital->name }} #{{ $hospital->id }}</li>
                                <div class="">CSD: {{ $hospital->customName->contract_start_date }}</div>
                                <div class="">CED: {{ $hospital->customName->contract_end_date }}</div>
                                <div class="">Work Type: {{ ($hospital->customName->isPartTime == 1 ) ? 'Full Time' : 'Part Time' }}</div>
                            @endforeach
                        </ol>

                    </div>
                </div>
            </div>

        @endforeach

    </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
