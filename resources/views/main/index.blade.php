<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="{{ asset('admin-lte') }}/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/summernote/summernote-bs4.min.css">

    {{-- DATA TABLE --}}

    <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('admin-lte') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    {{-- END DATA TABLE --}}

    {{-- SEARCH Support --}}
    <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/select2/css/select2.min.css">
    {{-- END SEARCH Support --}}
    <script nonce="606600a2-3964-427b-b1d4-e8e80c65ebfb">
        (function (w, d) {
            ! function (a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = {
                    deferred: []
                }, a.zaraz.q = [], a.zaraz._f = function (e) {
                    return function () {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x =
                        Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height,
                        a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a
                        .location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth,
                        a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(),
                        a.zarazData.q = []; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e).filter((a => a
                        .startsWith("_zaraz_"))).forEach((t => a.zarazData["z_" + t.slice(7)] = JSON
                        .parse(e.getItem(t))));
                    z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(
                        encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(
                        z, t)
                }))
            }(w, d, 0, "script");
        })(window, document);

    </script>
</head>

<body class="layout-fixed">
    <div class="wrapper">
        {{-- PRE-LOADER --}}
        <div class="preloader flex-column d-flex justify-content-center align-items-center">
            <strong>Loading...</strong>
            <div class="spinner-grow mt-2" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        {{-- END PRE-LOADER --}}
        {{-- NOTIF --}}
        @if ($message = Session::get('success'))
        <div class="card card-default bg-success">
            <div class="card-header">
                <h3 class="card-title text-white">{{ $message }}</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        @endif
        {{-- END NOTIF --}}

        {{-- HEADER --}}
        <div class="wrapper">
            @include('main.header')
        </div>
        {{-- END HEADER --}}

        <div class="wrapper pt-5">
            <section class="content">
                <div class="container my-3">
                    @yield('content')
                </div>
            </section>
        </div>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>


    {{-- INDEX --}}
    <script src="{{ asset('admin-lte') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('admin-lte') }}/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>

    <script src="{{ asset('admin-lte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('admin-lte') }}/plugins/chart.js/Chart.min.js"></script>

    <script src="{{ asset('admin-lte') }}/plugins/sparklines/sparkline.js"></script>

    <script src="{{ asset('admin-lte') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="{{ asset('admin-lte') }}/plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="{{ asset('admin-lte') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="{{ asset('admin-lte') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>

    <script src="{{ asset('admin-lte') }}/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="{{ asset('admin-lte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="{{ asset('admin-lte') }}/dist/js/adminlte.js?v=3.2.0"></script>

    {{-- <script src="{{ asset('admin-lte') }}/dist/js/demo.js"></script> --}}

    <script src="{{ asset('admin-lte') }}/dist/js/pages/dashboard.js"></script>
    {{-- END INDEX --}}
    {{-- DATA TABLE --}}

    <script src="{{ asset('admin-lte') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('admin-lte') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                "order": [[ 1, "desc" ]],
                "paging": true,
                "lengthChange": true, //menampilkan data (10,25,50,100) 
                "searching": true, //fitur searching
                "ordering": false, // order sesuai kolom nama barang
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                  var min = $('.date_range_filter').val();
                  var max = $('.date_range_filter2').val();
                  var createdAt = data[4];  // -> rubah angka 4 sesuai posisi tanggal pada tabelmu, dimulai dari angka 0
                  if (
                    (min == "" || max == "") ||
                    (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))
                  ) {
                    return true;
                  }
                  return false;
                }
            );
            $('.pickdate').change(function() {
                table.draw();
            });		
        });
    </script>
    {{-- END DATA TABLE --}}
</body>

</html>
