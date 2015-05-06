<?php
require_once ('config/main.php');
$db=new database();
$db->db_connect();
//$member_count=$db->member_count();
$daily_sales=$db->daily_sales();
$daily_trans=$db->daily_trans();
$daily_member=$db->daily_member();
$daily_trans_hour=$db->daily_trans_hour();
$daily_trans_hour_7=$db->daily_trans_hour_7();
$Trans_Years_All=$db->trans_years_all();
$someJSON='[{ month: "Januari", 2012: 546, 2013: 332, 2014: 227 },{ month: "Februari", 2012: 705, 2013: 417, 2014: 283 },{ month: "Maret", 2012: 856, 2013: 513, 2014: 361 },{month: "April", 2012: 1294, 2013: 614, 2014: 471 }]';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>Lukison - Foodtown</title>

    <?php include ('page/style-top.tpl');?>


</head>
<body class="page-body">
<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
<?php include ('page/nav-main.tpl');?>

<div class="main-content">

<!-- User Info, Notifications and Menu Bar -->

<?php include ('page/nav-top.tpl');
$defval=$db->tenant_menu_top_all();
$defval1='data_source';
?>

<script type="text/javascript">
jQuery(document).ready(function($)
{
    // Doughnut 1
    var <?php echo $defval1; ?> = <?php echo $defval; ?>

  for (0 = 1; i <= 25; i++) {
        var deftenant = '#tenant'+i;

    $(deftenant).dxPieChart({
        dataSource: data_source,
        tooltip: {
            enabled: true,
            format:"number",
            customizeText: function() {
                return this.argumentText + "<br/>" + this.valueText;
            }
        },
        size: {
            height: 130
        },
        legend: {
            visible: false
        },
        series: [{
            type: "doughnut",
            argumentField: 'tenant'+i
        }],
        palette: xenonPalette
    });
  }

    // Notifications
    setTimeout(function()
    {
        var opts = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right toast-default",
            "toastClass": "black",
            "onclick": null,
            "showDuration": "100",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        //toastr.info("20-Apr-2015!", "Last Updated", opts);
    }, 3000);

    $(function() {
        startRefresh();
    });

    //auto reload data
    function startRefresh() {
        setTimeout(startRefresh,3000);
        //$('#dasboard-item1').load(location.href + ' #dasboard-item1').fadeToggle();
        //$('#dasboard-item1').load(location.href + ' #dasboard-item1').fadeToggle(3000);
        //setTimeout(startRefresh,1000);
        //$('#dasboard-item2').load(location.href + ' #dasboard-item2').fadeToggle();
        //$('#dasboard-item2').load(location.href + ' #dasboard-item2').fadeToggle(3000);setTimeout(startRefresh,1000);
        //$('#dasboard-item3').load(location.href + ' #dasboard-item3').fadeToggle();
        //$('#dasboard-item3').load(location.href + ' #dasboard-item3').fadeToggle(3000);setTimeout(startRefresh,1000);
        //$('#dash-1').load(location.href + ' #dash-1').fadeIn("slow");
        //$('#val-member-daily').load(location.href + ' #val-member-daily').fadeIn("slow");
        //$('#val-member').reload;
    }
    // Charts
    var xenonPalette = ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'];
    var i = 0;
    // transaksi harian per 3 hari (/jam)





    // Resize charts
    $(window).on('xenon.resize', function()
    {
        $("#pageviews-visitors-chart").data("dxChart").render();
        $("#server-uptime-chart").data("dxChart").render();
        $("#server-uptime-chart2").data("dxChart").render();
        $("#realtime-network-stats").data("dxChart").render();

        $('.first-month').data("dxSparkline").render();
        $('.second-month').data("dxSparkline").render();
        $('.third-month').data("dxSparkline").render();
    });

});

function networkRealtimeChartTick(min_max, min_max2)
{
    var $ = jQuery,
        i = 0;

    var chart_data = $('#realtime-network-stats').dxChart('instance').option('dataSource');

    var count = $('#realtime-network-stats').data('iCount');

    $('#realtime-network-stats').data('iCount', count + 1);

    chart_data.shift();
    chart_data.push({id: count + 1, x1: between(min_max[0],min_max[1]), x2: between(min_max2[0],min_max2[1])});

    $('#realtime-network-stats').dxChart('instance').option('dataSource', chart_data);
}

function networkRealtimeGaugeTick()
{
    var nr_gauge = jQuery('#network-realtime-gauge').dxCircularGauge('instance');

    nr_gauge.value( between(50,200) );
}

function networkRealtimeMBupdate()
{
    var $el = jQuery("#network-mbs-packets"),
        options = {
            useEasing : true,
            useGrouping : true,
            separator : ',',
            decimal : '.',
            prefix : '' ,
            suffix : 'mb/s'
        },
        cntr = new countUp($el[0], parseFloat($el.text().replace('mb/s')), parseFloat(between(10,25) + 1/between(15,30)), 2, 1.5, options);

    cntr.start();
}

function between(randNumMin, randNumMax)
{
    var randInt = Math.floor((Math.random() * ((randNumMax + 1) - randNumMin)) + randNumMin);

    return randInt;
}
</script>



<?php include('page/tenant_menu_top_all.tpl');?>

<!-- Main Footer -->
<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
<!-- Or class "fixed" to  always fix the footer to the end of page -->
<footer class="main-footer sticky footer-type-1">

    <div class="footer-inner">

        <!-- Add your copyright text here -->
        <div class="footer-text">
            &copy; 2015
            <strong>Lukison Group</strong>
            theme by <a href="http://foodtown.co.id" target="_blank">Foodtown</a>
        </div>


        <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
        <div class="go-up">

            <a href="#" rel="go-top">
                <i class="fa-angle-up"></i>
            </a>

        </div>

    </div>

</footer>
</div>


<div class="modal fade" id="modal-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Basic Modal</h4>
            </div>

            <div class="modal-body">
                Hello I am a Modal!
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Save changes</button>
            </div>
        </div>
    </div>
</div>

</div>


<div class="page-loading-overlay">
    <div class="loader-2"></div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            startRefresh();
        });
        function startRefresh() {
            setTimeout(startRefresh,3000);.fadeToggle();
            //$('#dasboard-item1').load(location.href + ' #dasboard-item1').fadeToggle();
            //$('#dasboard-item1').load(location.href + ' #dasboard-item1').fadeIn("slow");
            // $('#dash-1').fadeIn("10000");//.load(location.href + ' #val-trans-daily').fadeIn("slow");
            //$('#val-member-daily').load(location.href + ' #val-member-daily').fadeIn("slow");
            //$('#val-member').reload;
        }


    });
</script>


<?php include('page/style-bottom.tpl');?>


</body>
</html>