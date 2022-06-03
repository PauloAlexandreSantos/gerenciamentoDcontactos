<footer class="py-1 mt-4 bg-primary">

    <p class="text-center mt-3 text-white">Gerenciamento de Contactos © {{date('Y')}} </p>
</footer>
@if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: true
        })
    </script>

@elseif(session('destroy'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Eliminado com sucesso!',
            showConfirmButton: true
        })
    </script>

@elseif(session('edit'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Alterações foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@endif
</div> <!-- .wrapper -->
<script src="/dashboard/js/jquery.min.js"></script>
<script src="/dashboard/js/popper.min.js"></script>
<script src="/dashboard/js/moment.min.js"></script>
<script src="/dashboard/js/bootstrap.min.js"></script>
<script src="/dashboard/js/simplebar.min.js"></script>
<script src='/dashboard/js/daterangepicker.js'></script>
<script src='/dashboard/js/jquery.stickOnScroll.js'></script>
<script src="/dashboard/js/tinycolor-min.js"></script>
<script src="/dashboard/js/config.js"></script>
<script src="/dashboard/js/d3.min.js"></script>
<script src="/dashboard/js/topojson.min.js"></script>
<script src="/dashboard/js/datamaps.all.min.js"></script>
<script src="/dashboard/js/datamaps-zoomto.js"></script>
<script src="/dashboard/js/datamaps.custom.js"></script>
<script src="/dashboard/js/Chart.min.js"></script>
<script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
</script>
<script src="/dashboard/js/gauge.min.js"></script>
<script src="/dashboard/js/jquery.sparkline.min.js"></script>
<script src="/dashboard/js/apexcharts.min.js"></script>
<script src="/dashboard/js/apexcharts.custom.js"></script>
<script src='/dashboard/js/jquery.mask.min.js'></script>
<script src='/dashboard/js/select2.min.js'></script>
<script src='/dashboard/js/jquery.steps.min.js'></script>
<script src='/dashboard/js/jquery.validate.min.js'></script>
<script src='/dashboard/js/jquery.timepicker.js'></script>
<script src='/dashboard/js/dropzone.min.js'></script>
<script src='/dashboard/js/uppy.min.js'></script>
<script src='/dashboard/js/quill.min.js'></script>
<script src='/dashboard/js/jquery.dataTables.min.js'></script>
<script src='/dashboard/js/dataTables.bootstrap4.min.js'></script>

@yield('JS')
<script src="/js/sweetalert2.all.min.js"></script>





<script src="/dashboard/js/apps.js"></script>
</body>

</html>
