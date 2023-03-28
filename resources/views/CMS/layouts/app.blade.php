<!DOCTYPE html>
<html lang="ar" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    @include('CMS.layouts.includes.cssLinks')
    <title>Dashboard</title>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('CMS.layouts.includes.slider')

            <!-- Layout container --> 
            <div class="layout-page">
                <!-- Navbar -->

                @include('CMS.layouts.includes.nav')

                @include('CMS.layouts.includes.errorMessage')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('CMS.layouts.includes.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    @include('CMS.layouts.includes.scriptsLinks')
    @yield('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        @if (session()->has('success'))
            var notification = alertify.notify('{{ session()->get('success') }}', 'success', 5, function() {});
        @endif
        if (localStorage.getItem("success")) {
            var notification = alertify.notify(localStorage.getItem("success"), 'success', 5, function() {});
            localStorage.setItem("success", "");
        }

        $(".deleteItem").click(function() {
            var url = $(this).attr('data-url')
            var elment = $(this).closest('tr');
            Swal.fire({
                title: 'هل انت متأكد ؟',
                text: "لن تستطيع الرجوع",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#696cff',
                cancelButtonColor: '#ff3e1d ',
                cancelButtonText: 'الغاء',
                confirmButtonText: 'تأكيد'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: "delete",
                        dataType: "html",
                        success: function(data) {
                                elment.remove();
                            notification = alertify.notify(data, 'success', 5,
                                function() {});
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            notification = alertify.notify('Deleted fail', 'error', 5,
                                function() {});
                        }
                    });

                }
            })
        });

        $(".activateItem").click(function() {
            var url = $(this).attr('data-url')
            var elment = $(this).closest('td .badge');
            console.log(elment);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't do this ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#696cff',
                cancelButtonColor: '#ff3e1d ',
                confirmButtonText: 'Yes, do it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: "post",
                        success: function(data) {
                            if (data == 1)
                                localStorage.setItem("success", "Activate Successfully");
                            else
                                localStorage.setItem("success", "Un Activate Successfully");

                            window.location.href = window.location.pathname;


                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            notification = alertify.notify('Opration fail', 'error', 5,
                                function() {});
                        }
                    });

                }
            })
        });
    </script>
</body>

</html>
