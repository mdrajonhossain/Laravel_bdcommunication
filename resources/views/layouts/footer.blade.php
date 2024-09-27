<!-- Footer -->
<footer class="footer mt-auto">
  <div class="copyright bg-white">
    <p>
      &copy; <span id="copy-year"></span> Copyright BDCommunication by <a class="text-primary" href="https://www.BDCommunication.com" target="_blank" >BDCommunication</a>.
    </p>
  </div>
  <script>
      var d = new Date();
      var year = d.getFullYear();
      document.getElementById("copy-year").innerHTML = year;
  </script>
</footer>

</div>
</div>

          <!-- Card Offcanvas -->





          <script src="{{asset('newdash/plugins/jquery/jquery.min.js')}}"></script>
          <script src="{{asset('newdash/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('newdash/plugins/simplebar/simplebar.min.js')}}"></script>
          <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

          
          
          <script src="{{asset('newdash/plugins/apexcharts/apexcharts.js')}}"></script>
          
          
          
          <script src="{{asset('newdash/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
          
          
          
          <script src="{{asset('newdash/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
          <script src="{{asset('newdash/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
          <script src="{{asset('newdash/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
          
          
          
          <script src="{{asset('newdash/plugins/daterangepicker/moment.min.js')}}"></script>
          <script src="{{asset('newdash/plugins/daterangepicker/daterangepicker.js')}}"></script>
          <script>
            jQuery(document).ready(function() {
              jQuery('input[name="dateRange"]').daterangepicker({
              autoUpdateInput: false,
              singleDatePicker: true,
              locale: {
                cancelLabel: 'Clear'
              }
            });
              jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
              });
              jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                jQuery(this).val('');
              });
            });
          </script>
          
          
          
          <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
          
          
          
          <script src="{{asset('newdash/plugins/toaster/toastr.min.js')}}"></script>

          
          
          <script src="{{asset('newdash/js/mono.js')}}"></script>
          <script src="{{asset('newdash/js/chart.js')}}"></script>
          <script src="{{asset('newdash/js/map.js')}}"></script>
          <script src="{{asset('newdash/js/custom.js')}}"></script>

          


          <!--  -->


</body>
</html>