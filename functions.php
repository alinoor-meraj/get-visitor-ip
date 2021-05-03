<!-- Wordpress Shortcode -->
function state_name_shortcode(){
    return '<span id="State">Loading...</span>
            <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
            <script type="text/javascript">
               jQuery.get("https://ipinfo.io",function(response){
               /*jQuery("#City").html("<b>"+response.city+"<b>");*/
               jQuery("#State").html("<b>"+response.region+"<b>");
               },"json");
            </script>';
}
add_shortcode('State', 'state_name_shortcode'); 
