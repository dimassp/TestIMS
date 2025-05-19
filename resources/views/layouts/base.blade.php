<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instalment Application</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/moment-2.29.4/dt-2.3.1/datatables.min.css" rel="stylesheet" integrity="sha384-MCunX+Ty+/oF+JuJYbU27d0lnHOjm6zDpU4H9z8H5M0JNYk7yaMJ8637d23XvlPa" crossorigin="anonymous">
</head>
<body>
    
    
    <script src="h3ttps://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/moment-2.29.4/dt-2.3.1/datatables.min.js" integrity="sha384-qcTuRo7MNyRcxtv/F8sprVK91m+zh7Soq4BpwOjr9fsv/dcsleo6SSjzqPhIH9B2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
    @yield('contents')
    @yield('scripts')
</body>
</html>