<?php
/**
 * Created by PhpStorm.
 * User: Valentine
 * Date: 4/15/15
 * Time: 10:24 AM

require_once ('config/main.php');
$db=new database();
$db->db_connect();
$member_count=$db->member_count();
$Top5_Member=$db->top5_member();
$someJSON='[{ month: "Januari", 2012: 546, 2013: 332, 2014: 227 },{ month: "Februari", 2012: 705, 2013: 417, 2014: 283 },{ month: "Maret", 2012: 856, 2013: 513, 2014: 361 },{month: "April", 2012: 1294, 2013: 614, 2014: 471 }]';
*/
?>
            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">TOP 5 Member</h3>
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
                                      var dataSource = <?php echo $Top5_Member; ?>;
                                        $("#bar-5").dxChart({
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
                                                { valueField: "total", name: "Total Transaksi", color: "#ffd700" }
                                            ],
                                            title: {
                                                text: "TOP 5 Member All The Time"
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
                        <div id="bar-5" style="height: 450px; width: 100%;"></div>
                    </div>
                    <div class="panel-body">
                        <script type="text/javascript">
                            jQuery(document).ready(function($)
                            {
                                var dataSources = <?php echo $Top5_Member; ?>;
                                $("#bar-6").dxChart({
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
                                    { valueField: "total", name: "Total Transaksi", color: "#ffd700" }
                                ],
                                title: {
                                    text: "TOP 5 Member of The Month"
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
                        <div id="bar-6" style="height: 450px; width: 100%;"></div>
                    </div>
                </div>

                </div>
            </div>