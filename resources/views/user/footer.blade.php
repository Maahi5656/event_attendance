<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                2017 © Adminox - Coderthemes.com
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- Latest compiled and minified JavaScript -->

<!-- jQuery  -->
<script src="{{ asset('backend') }}/js/jquery.min.js"></script>
<script src="{{ asset('backend') }}/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="{{ asset('backend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('backend') }}/js/waves.js"></script>
<script src="{{ asset('backend') }}/js/jquery.slimscroll.js"></script>
<script src="{{ asset('backend') }}/js/jquery.scrollTo.min.js"></script>

<!-- Counter js  -->
<script src="{{ asset('backend') }}/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="{{ asset('backend') }}/plugins/counterup/jquery.counterup.min.js"></script>

<!--C3 Chart-->
<script type="text/javascript" src="{{ asset('backend') }}/plugins/d3/d3.min.js"></script>
<script type="text/javascript" src="{{ asset('backend') }}/plugins/c3/c3.min.js"></script>

<!--Echart Chart-->
<script src="{{ asset('backend') }}/plugins/echart/echarts-all.js"></script>

<!-- Dashboard init -->
<script src="{{ asset('backend') }}/pages/jquery.dashboard.js"></script>

<!-- Required datatable js -->
<!-- Required datatable js -->
<script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{ asset('backend') }}/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables/jszip.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables/vfs_fonts.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="{{ asset('backend') }}/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- App js -->
<script src="{{ asset('backend') }}/js/jquery.core.js"></script>
<script src="{{ asset('backend') }}/js/jquery.app.js"></script>

@yield('script')


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'colvis']
        });

        table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );

</script>

<script src="{{ asset('js') }}/main.js"></script>


</body>
</html>
