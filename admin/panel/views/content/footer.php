<div class="py-6 px-6 text-center">
  <p class="mb-0 fs-4">Copyright &copy;<script>
      document.write(new Date().getFullYear());
    </script> Todos los derechos reservados | desarrollado por <a href="https://github.com/javiafb"> Javiafb</a></p>
</div>
</div>
</div>
</div>
<script src="<?php echo $rutas ?>libs/jquery/dist/jquery.min.js"></script>
<script src="<?php echo $rutas ?>libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $rutas ?>js/sidebarmenu.js"></script>
<script src="<?php echo $rutas ?>js/app.min.js"></script>
<script src="<?php echo $rutas ?>libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?php echo $rutas ?>libs/simplebar/dist/simplebar.js"></script>
<script src="<?php echo $rutas ?>js/dashboard.js"></script>
<script src="<?php echo $rutas ?>js/funciones.js"></script>

<!-- Bootstrap JS -->
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function() {
    $('#miTabla').DataTable({
      language: {
        url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
      }
    });
  });
</script>

</body>

</html>