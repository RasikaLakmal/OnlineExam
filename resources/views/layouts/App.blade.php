<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'YBridge') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <!-- jQuery 2.1.4 -->
    <script src="http://192.248.56.20/match-module/asset/js/jQuery-2.1.4.min.js"></script>
    <script src="http://192.248.56.20/match-module/asset/jquery-ui/jquery-ui.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="http://192.248.56.20/match-module/asset/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="http://192.248.56.20/match-module/asset/js/icheck.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
         $('#level').hide();
        $(document).on('change','#SelectType',function(){
            var value=$(this).val();
            if (value=='Student') {
                $('#level').show('slow');
            }else{
                $('#level').hide();
            }
        });
    });
</script>
    <script>
      $(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        }); 
        
        $( "#datepicker" ).datepicker();

         setTimeout(function(){
         $("#myMessage").fadeOut(1000);}, 4000);
         

        $('.formshow').hide();
        $('#1').show('slow');
        $('#selectField').change(function () {
            $('.formshow').hide('slow');
            $('#'+$(this).val()).show('slow');
        });
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });

            



      });
    </script>
    </body>
</html>
