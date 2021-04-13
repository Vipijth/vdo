<footer class="main-footer">
               <div class="footer-left">
                  Copyright &copy; <a href="http://5thdt.com/">5TH Dimension Technologies</a> <span id="year"></span>
               </div>
               <div class="footer-right">
               </div>
            </footer>
         </div>
      </div>
      <!-- General JS Scripts -->
      <script src="assets/js/app.min.js"></script>
      <!-- JS Libraies -->
      <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>

      <!-- Page Specific JS File -->
      <script src="assets/js/page/index.js"></script>
      <!-- Template JS File -->
      <script src="assets/js/scripts.js"></script>
      <!-- Custom JS File -->
      <script src="assets/js/custom.js"></script>
	  <script type="text/javascript">
		  document.getElementById("year").innerHTML = new Date().getFullYear();
	  </script> 

        <!-- Script -->
        <script type='text/javascript'>
            $(document).ready(function(){

                // Search all columns
                $('#txt_searchall').keyup(function(){
                    // Search Text
                    var search = $(this).val();

                    // Hide all table tbody rows
                    $('table tbody tr').hide();

                    // Count total search result
                    var len = $('table tbody tr:not(.notfound) td:contains("'+search+'")').length;

                    if(len > 0){
                      // Searching text in columns and show match row
                      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
                          $(this).closest('tr').show();
                      });
                    }else{
                      $('.notfound').show();
                    }
                    
                });

                // Search on name column only
       
               
            });

            // Case-insensitive searching (Note - remove the below script for Case sensitive search )
            $.expr[":"].contains = $.expr.createPseudo(function(arg) {
                return function( elem ) {
                    return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
                };
            });
        </script>
    </body>
</html>