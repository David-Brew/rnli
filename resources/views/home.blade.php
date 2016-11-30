<!DOCTYPE html>
<html id="html-home">
  <head>
    <meta charset="UTF-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Styles -->
    <link rel="stylesheet" id="font-awesome-css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/stars.css" rel="stylesheet">
  </head>
  <body id="home-page">
    
      @include('partials._header')

    <div class="center-align">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">RNLI Dashboard</div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada leo et dui mollis, ut lobortis mi consequat. Sed eleifend ante ipsum, quis faucibus diam posuere nec. Nullam sed vulputate lacus. Proin ultrices turpis sit amet purus auctor, eu viverra leo faucibus. Integer varius diam massa, ut pulvinar enim rhoncus quis. Nullam leo dui, venenatis dictum feugiat ut, convallis sit amet mauris. Nullam maximus nunc sed velit suscipit sodales. Duis ultrices, ligula id fermentum elementum, erat quam tempus dolor, vel tincidunt neque mi at velit. Donec tincidunt accumsan enim ut varius. Maecenas malesuada suscipit laoreet. Cras ac porttitor quam. Duis efficitur arcu sed eros mollis vehicula. Nullam id luctus eros, fringilla dictum mi.</p>

                        <p>Quisque eleifend dolor ut nunc placerat, vel imperdiet sem ultricies. Etiam at urna malesuada, eleifend nunc ut, blandit ex. Proin in risus non magna auctor sodales at et magna. Duis eu posuere diam. Curabitur lobortis nec lectus a accumsan. Sed dignissim sit amet orci quis laoreet. Maecenas aliquam elementum nibh, ut molestie purus tincidunt quis. Ut lacinia arcu sapien, feugiat scelerisque libero tincidunt et. Morbi arcu dui, mollis in eleifend ac, porttitor ut ante.</p>

                    </div>
                </div>
            </div>
    </div>
      
      
      @yield('footer')
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>