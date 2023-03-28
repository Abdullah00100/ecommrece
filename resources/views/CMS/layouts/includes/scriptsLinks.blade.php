<script src="{{ asset('dashborad/assets/vendor/js/helpers.js') }}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('dashborad/assets/js/config.js') }}"></script>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('dashborad/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('dashborad/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('dashborad/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('dashborad/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('dashborad/assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('dashborad/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('dashborad/assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('dashborad/assets/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="{{ asset('js/errorMessage.js') }}"></script>

{{-- alerts --}}

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{ asset('dashborad/assets/DataTables-1.13.1/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashborad/assets/DataTables-1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('dashborad/assets/select2-4.1.0-rc.0/dist/js/select2.min.js') }}"></script>

{{-- <script src="{{ asset('dashborad/assets/datatables.min.js') }}"></script> --}}
<script>
    $(document).ready(function() {
        $('.table').DataTable({
            "pageLength": 10,
            "order": [0, 'desc'],
            'ordering': true
        });

    });
    $('td').filter(function() {
        return $.trim($(this).html()) == '';
    }).html('-----');
</script>
