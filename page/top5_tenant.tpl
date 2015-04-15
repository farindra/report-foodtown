
            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">TOP 5 Tenant</h3>
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
                                   /* var dataSource = [
                                        { country: "USA", gold: 36, silver: 38, bronze: 36 },
                                        { country: "Germany", gold: 16, silver: 10, bronze: 15 }
                                    ];*/
                                      var dataSource = <?php echo $Top5_Tenant; ?>;
                                        $("#bar-7").dxChart({
                                            rotated: true,
                                            pointSelectionMode: "multiple",
                                            dataSource: dataSource,
                                            commonSeriesSettings: {
                                                argumentField: "country",
                                                type: "stackedbar",
                                                selectionStyle: {
                                                    hatching: {
                                                        direction: "left"
                                                    }
                                                }
                                            },

                                            series: [
                                                { valueField: "total", name: "Total Transaksi", color: "#52e667" }
                                            ],
                                            title: {
                                                text: "TOP 5 Tenant All The Time"
                                            },
                                            legend: {
                                                verticalAlignment: "bottom",
                                                horizontalAlignment: "center"
                                            },
                                            pointClick: function(point) {
                                                point.isSelected() ? point.clearSelection() : point.select();

                                        }
                                      });
                                });
                            </script>
                        <div id="bar-7" style="height: 450px; width: 100%;"></div>
                    </div>
                    <div class="panel-body">
                        <script type="text/javascript">
                            jQuery(document).ready(function($)
                            {
                                var dataSources = <?php echo $Top5_Tenant; ?>;
                                $("#bar-8").dxChart({
                                    rotated: true,
                                    pointSelectionMode: "multiple",
                                    dataSource: dataSources,
                                commonSeriesSettings: {
                                    argumentField: "country",
                                    type: "stackedbar",
                                    selectionStyle: {
                                        hatching: {
                                            direction: "left"
                                        }
                                    }
                                },
                                series: [
                                    { valueField: "total", name: "Total Transaksi", color: "#52e667" }
                                ],
                                title: {
                                    text: "TOP 5 Tenant of The Month"
                                },
                                legend: {
                                    verticalAlignment: "bottom",
                                    horizontalAlignment: "center"
                                },
                                pointClick: function(point) {
                                    point.isSelected() ? point.clearSelection() : point.select();

                                }
                                });
                            });
                        </script>
                        <div id="bar-8" style="height: 450px; width: 100%;"></div>
                    </div>
                </div>

                </div>
            </div>