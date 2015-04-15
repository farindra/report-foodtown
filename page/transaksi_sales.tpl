<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="row">
    <div class="col-sm-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Transaksi Sales</h3>
                <div class="panel-options">
                    <a href="#" data-toggle="panel">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                    <a href="#" data-toggle="remove">
                        &times;
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <script type="text/javascript">
                    jQuery(document).ready(function($)
                    {
                        /*  var dataSource = [
                         { month: 'Januari', europe: 546, americas: 332, africa: 227 },
                         { month: 'Desember', europe: 650, americas: 1231, africa: 1937 }
                         ];*/
                        var dataSource = <?php echo $someJSON; ?>;

                        $("#bar-3").dxChart({
                            dataSource: dataSource,
                            commonSeriesSettings: {
                                argumentField: "month"
                            },
                            series: [
                                { valueField: "2012", name: "Tahun 2012", color: "#a4caf9" },
                                { valueField: "2013", name: "Tahun 2013", color: "#68acff" },
                                { valueField: "2014", name: "Tahun 2014", color: "#00fd83" }
                            ],
                            argumentAxis:{
                                grid:{
                                    visible: true
                                }
                            },
                            tooltip:{
                                enabled: true
                            },
                            title: "Histoy Total Sales Perbulan",
                            legend: {
                                verticalAlignment: "bottom",
                                horizontalAlignment: "center"
                            },
                            commonPaneSettings: {
                                border:{
                                    visible: true,
                                    right: false
                                }
                            }
                        });
                    });
                </script>
                <div id="bar-3" style="height: 400px; width: 100%;"></div>
            </div>
        </div>

    </div>
</div>
</body>
</html>