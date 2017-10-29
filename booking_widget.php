<?php
class TheFork_Booking_Widget
{
    public function __construct()
    {
        add_shortcode('booking_widget', array($this, 'booking_widget_html'));
    }

    public function booking_widget_html($atts, $content)
    {
    	$atts = shortcode_atts(array('token' => 0), $atts);
?>
<div id="booking-widget">
    <script>
        (function () {
        var direction;
        if(window.matchMedia("(min-width:768px)").matches) {
            direction = "horizontal";
        } else {
            direction = "vertical";
        }
        var token = "<?php echo $atts['token']; ?>";
        document.write('\x3Cscript type="text/javascript" src="https://module.lafourchette.com/fr_FR/js/' + direction + '/' + token + '">\x3C/script>');
    })();
    </script>
</div>
<?php
    }
}
?>
