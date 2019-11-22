<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('titulo','Reportes Bluemix')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset("assets/$theme2/plugins/toastr/toastr.min.css")}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset("assets/$theme2/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme2/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset("assets/$theme2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme2/dist/css/adminlte.min.css")}}">

      {{-- <!-- Full calendar -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fullcalendar/main.min.css")}}">
     
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fullcalendar-daygrid/main.min.css")}}">
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fullcalendar-timegrid/main.min.css")}}">
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fullcalendar-bootstrap/main.min.css")}}">
 --}}

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

@yield('styles')

</head>
<body class="sidebar-mini layout-fixed sidebar-collapse">
        <!-- Site wrapper -->
            <div class="wrapper"> 
                <!-- Inicio Header -->
                @include("theme/$theme2/nav")
                <!-- Fin Header -->

                <!-- Inicio aside -->
              
                <!-- Fin Header -->
                <div class="content-wrapper">
             <!-- Content Header (Page header) -->
                  <!-- Main content -->
                    <section class="content">
                        @yield('contenido')
                    </section>
          <!-- /.content -->
            </div>
        <!-- /.inicio footer -->    
        @include("theme/$theme2/footer")   
         <!-- /.termino footer -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        </div>









    


   <script src="{{asset("assets/$theme2/plugins/jquery/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset("assets/$theme2/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->  --}}
 <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> 
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme2/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset("assets/$theme2/plugins/moment/moment.min.js")}}"></script> 
<script src="{{asset("assets/$theme2/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset("assets/$theme2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme2/dist/js/adminlte.js")}}"></script>
<!-- Toastr -->
<script src="{{asset("assets/$theme2/plugins/toastr/toastr.min.js")}}"></script>
<script src="{{asset("assets/$theme2/plugins/sweetalert2/sweetalert2.min.js")}}"></script>



<!-- Modal edit empleado -->
<script> $('#mimodal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id_empleado = button.data('id_empleado')
        var nombre_empleado = button.data('nombre_empleado') 
        var apellido_empleado = button.data('apellido_empleado') 
        var rut_empleado = button.data('rut_empleado') 
        var correo_empleado = button.data('correo_empleado') 
        var telefono_empleado = button.data('telefono_empleado') 
        var comision_empleado = button.data('comision_empleado') 
        var direccion_empleado = button.data('direccion_empleado')
        var estado_empleado = button.data('estado_empleado')
        
        
        var modal = $(this)
        modal.find('.modal-body #id_empleado').val(id_empleado);
        modal.find('.modal-body #nombre_empleado').val(nombre_empleado);
        modal.find('.modal-body #apellido_empleado').val(apellido_empleado);
        modal.find('.modal-body #rut_empleado').val(rut_empleado);
        modal.find('.modal-body #correo_empleado').val(correo_empleado);
        modal.find('.modal-body #telefono_empleado').val(telefono_empleado);
        modal.find('.modal-body #comision_empleado').val(comision_empleado);
        modal.find('.modal-body #direccion_empleado').val(direccion_empleado);
        modal.find('.modal-body #estado_empleado').val(estado_empleado);

        
        
  })</script>
<!-- Fin Modal edit empleado -->




@yield('script')





</body>
</html>