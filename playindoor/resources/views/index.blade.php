<!DOCTYPE html>
<html>
<head>
    <base href="/">
    <title>Angular With Webpack</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="{{asset('image/icon')}}" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('css/clarity-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/clarity-ui.min.css')}}")>
</head>
<body>
{{-- <my-app>Loading...</my-app> --}}
{{-- <script type="text/javascript" src="{{asset('js/app.js')}}"></script> --}}
<button class="btn btn-primary">Primary</button>
<button class="btn btn-success">Success</button>
<button class="btn btn-warning">Warning</button>
<button class="btn btn-danger">Danger</button>
<button class="btn btn-danger" disabled>Disabled</button>
<button class="btn btn-outline">Regular</button>
<button class="btn btn-success-outline">Success-Outline</button>
<button class="btn btn-info-outline">Info</button>
<button class="btn btn-warning-outline">Warning</button>
<button class="btn btn-danger-outline">Danger</button>
<button class="btn btn-outline" disabled>Disabled</button>
<script src="{{asset('js/custom-elements.min.js')}}"></script>
<script src="{{asset('js/clarity-icons.min.js')}}"></script>

</body>
</html>
