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

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body">
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
        <?php include ('page/nav-main.tpl');?>

        <div class="main-content">

            <!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">

				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">

					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>

					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>

						<ul class="dropdown-menu messages">
							<li>

								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">

									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>

									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>

											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>

											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>

											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>

									<!-- Repeated -->

									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>

									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>

											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>

											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>

											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>

								</ul>

							</li>

							<li class="external">
								<a href="blank-sidebar.html">
									<span>All Messages</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>

						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>

							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
									<li class="active notification-success">
										<a href="#">
											<i class="fa-user"></i>

											<span class="line">
												<strong>New user registered</strong>
											</span>

											<span class="line small time">
												30 seconds ago
											</span>
										</a>
									</li>

									<li class="active notification-secondary">
										<a href="#">
											<i class="fa-lock"></i>

											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>

											<span class="line small time">
												3 hours ago
											</span>
										</a>
									</li>

									<li class="notification-primary">
										<a href="#">
											<i class="fa-thumbs-up"></i>

											<span class="line">
												<strong>Someone special liked this</strong>
											</span>

											<span class="line small time">
												2 minutes ago
											</span>
										</a>
									</li>

									<li class="notification-danger">
										<a href="#">
											<i class="fa-calendar"></i>

											<span class="line">
												John cancelled the event
											</span>

											<span class="line small time">
												9 hours ago
											</span>
										</a>
									</li>

									<li class="notification-info">
										<a href="#">
											<i class="fa-database"></i>

											<span class="line">
												The server is status is stable
											</span>

											<span class="line small time">
												yesterday at 10:30am
											</span>
										</a>
									</li>

									<li class="notification-warning">
										<a href="#">
											<i class="fa-envelope-o"></i>

											<span class="line">
												New comments waiting approval
											</span>

											<span class="line small time">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>

				</ul>


				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">

					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->

						<form method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />

							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>

					</li>

					<!--<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								Arlind Nushi
								<i class="fa-angle-down"></i>
							</span>
						</a>

						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
									Help
								</a>
							</li>
							<li class="last">
								<a href="extra-lockscreen.html">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>-->

					<!--<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>-->

				</ul>

			</nav>

			<script type="text/javascript">
				jQuery(document).ready(function($)
				{	
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

                    var line_chart_data_source = <?php echo $daily_trans_hour; ?>;

					$("#pageviews-visitors-chart").dxChart({
						dataSource: line_chart_data_source,
						commonSeriesSettings: {

							argumentField: "jam",
							point: { visible: true, size: 7, hoverStyle: {size: 10, border: 0, color: 'inherit'} },
							line: {width: 1, hoverStyle: {width: 1}}
						},
                        title: 'Hourly Transaction',
						series: [
							{ valueField: "1",name: "Today",color: "#0066ff",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "2",name: "Yesterday",color: "#68b828",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "3",name: "2 Day ago",color: "#fcff00",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
							//{ valueField: "grand", name: "Transaksi", color: "#eeeeee" },
						],
						legend: {
							//position: 'outside',
                            verticalAlignment: "bottom",
                            horizontalAlignment: "center"

						},

						commonAxisSettings: {
							label: {
								visible: true

							},
							grid: {
								visible: true,
								color: '#f9f9f9'
							}

						},
                        tooltip:{
                            enabled: true,
                            format: "numbers",

                        },

						valueAxis: {
                            title: 'Total Transaction',
							//max: 500
						},
						argumentAxis: {
                            title: 'Hours',
					        valueMarginsEnabled: true,
                            max:22
					    },

					});

                    // transaksi harian per 7 hari (/jam)

                    var data_hari_jam = <?php echo $daily_trans_hour_7; ?>;

                    $("#server-uptime-chart3").dxChart({
                        dataSource: data_hari_jam,
                        commonSeriesSettings: {
                            argumentField: "jam",
                            point: { visible: true, size: 7, hoverStyle: {size: 10, border: 0, color: 'inherit'} },
                            line: {width: 1, hoverStyle: {width: 1}}
                        },
                        series: [
                            { valueField: "1",name: "Today",color: "#0066ff",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "2",name: "Yesterday",color: "#68b828",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "3",name: "2 Day ago",color: "#fcff00",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "4",name: "3 Day ago",color: "#ff8a00",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "5",name: "4 Day ago",color: "#00eaff",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "6",name: "5 Day ago",color: "#ea00ff",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "7",name: "6 Day ago",color: "#7100c0",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "8",name: "7 Day ago",color: "#a6a6a6",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            //{ valueField: "grand", name: "Transaksi", color: "#eeeeee" },
                        ],
                        legend: {
                            //position: 'outside',
                            verticalAlignment: "bottom",
                            horizontalAlignment: "center"

                        },

                        commonAxisSettings: {
                            label: {
                                visible: true

                            },
                            grid: {
                                visible: true,
                                color: '#f9f9f9'
                            }

                        },
                        tooltip:{
                            enabled: true,
                            format: "numbers",

                        },

                        valueAxis: {
                            title: 'Total Transaction',
                            //max: 500
                        },
                        argumentAxis: {
                            title: 'Hours',
                            valueMarginsEnabled: true,
                            max:22
                        },

                    });
					
					
					// Server Uptime Chart
					var bar1_data_source = [
						{ year: 1, 	europe: 0, americas: 0, africa: 0 },
						{ year: 2, 	europe: 0, americas: 0, africa: 0 },
						{ year: 3, 	europe: 0, americas: 0, africa: 0 },
						{ year: 4, 	europe: 0, americas: 0, africa: 0 },
                        { year: 5, 	europe: 0, americas: 0, africa: 0 },
                        { year: 6, 	europe: 0, americas: 0, africa: 0 },
                        { year: 7, 	europe: 0, americas: 0, africa: 0 },
					];

                    var serveruptime = <?php echo $db->week_trans_day();?>;

					$("#server-uptime-chart").dxChart({
						dataSource: serveruptime,
					 
						series: {
							argumentField: "tgl",
							valueField: "total",
							name: "Sales",
							type: "bar",
							color: '#7c38bc',
                           // label:{
                           //     visible: true,
                           //     customizeText: function (){
                           //         return this.valueText+' Jt';
                           //     }
                           // },
						},
						commonAxisSettings: {
							label: {
								visible: false
							},
							grid: {
								visible: true
							}
						},
						legend: {
							visible: false
						},
						argumentAxis: {
					        valueMarginsEnabled: true
					    },
						valueAxis: {
							max: 100
						},
                        tooltip:{
                            enabled: true,
                            format: "numbers",
                            customizeText: function (){
                                         return this.valueText+' Jt';
                                     }
                        },
						equalBarWidth: {
							width: 17
						}

					});

                    // Server Uptime Chart
                    var bar1_data_source2 = [
                        { year: 1, 	europe: 0, americas: 0, africa: 0 },
                        { year: 2, 	europe: 0, americas: 0, africa: 0 },
                        { year: 3, 	europe: 0, americas: 0, africa: 0 },
                        { year: 4, 	europe: 0, americas: 0, africa: 0 },
                        { year: 5, 	europe: 0, americas: 0, africa: 0 },
                        { year: 6, 	europe: 0, americas: 0, africa: 0 },
                        { year: 7, 	europe: 0, americas: 0, africa: 0 },
                    ];

                    var serveruptime2 = <?php echo $db->week_trans_day_month();?>;

                    $("#server-uptime-chart2").dxChart({
                        dataSource: serveruptime2,
                        commonSeriesSettings: {
                            argumentField: "name"

                        },
                        series: [
                            {valueField: "total4",name: "#1 week",type: "bar",color: '#ff6868'},
                            {valueField: "total3",name: "#2 week",type: "bar",color: '#ffdd68'},
                            {valueField: "total2",name: "#3 week",type: "bar",color: '#68ff6f'},
                            {valueField: "total1",name: "#4 week",type: "bar",color: '#7c38bc'},

                        ],

                        commonAxisSettings: {
                            label: {
                                visible: true
                            },
                            grid: {
                                visible: true
                            }
                        },
                        legend: {
                            visible: true,
                            verticalAlignment: "bottom",
                            horizontalAlignment: "center"
                        },
                        argumentAxis: {
                            valueMarginsEnabled: true
                        },
                        valueAxis: {
                            //max: 100

                        },
                        tooltip:{
                            enabled: true,
                            format: "numbers",
                            customizeText: function (){
                                return this.valueText+' Jt';
                            }
                        },
                        equalBarWidth: {
                            width: 17
                        }
                    });


                    // Average Sales Chart
					var doughnut1_data_source = [
                        //15.64
                        //15.38
                        //23.4
                        //18.82
                        //22.78
                        //73.2
                        //86.69

                        {region: "Asia", val: 10},
                        {region: "Euor", val: 15},
                        {region: "USA", val: 20},

					], timer;
					
					$("#sales-avg-chart div").dxPieChart({
						dataSource: doughnut1_data_source,
						tooltip: {
							enabled: false,
						  	format:"millions",
							customizeText: function() { 
								return this.argumentText + "<br/>" + this.valueText;
							}
						},
						size: {
							height: 90
						},
						legend: {
							visible: false
						},  
						series: [{
							type: "doughnut",
							argumentField: "region"
						}],
						palette: ['#5e9b4c', '#6ca959', '#b9f5a6'],
					});
					
					
					
					// Pageview Stats
					$('#pageviews-stats').dxBarGauge({
						startValue: -50,
						endValue: 50,
						baseValue: 0,
						values: [-21.3, 14.8, -30.9, 45.2],
						label: {
							customizeText: function (arg) {
								return arg.valueText + '%';
							}
						},
						//palette: 'ocean',
						palette: ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'],
						margin : {
							top: 0
						}
					});
					
					var firstMonth = {
						dataSource: getFirstMonthViews(),
						argumentField: 'month',
						valueField: '2014',
						type: 'area',
						showMinMax: true,
						lineColor: '#68b828',
						minColor: '#68b828',
						maxColor: '#7c38bc',
						showFirstLast: false,
					},
					secondMonth = {
						dataSource: getSecondMonthViews(),
						argumentField: 'month',
						valueField: '2014',
						type: 'splinearea',
						lineColor: '#68b828',
						minColor: '#68b828',
						maxColor: '#7c38bc',
						pointSize: 6,
						showMinMax: true,
						showFirstLast: false
					},
					thirdMonth = {
						dataSource: getThirdMonthViews(),
						argumentField: 'month',
						valueField: '2014',
						type: 'splinearea',
						lineColor: '#68b828',
						minColor: '#68b828',
						maxColor: '#7c38bc',
						pointSize: 6,
						showMinMax: true,
						showFirstLast: false
					};
					
					function getFirstMonthViews() {
						return [{ month: 1, 2014: 7341 },
						{ month: 2, 2014: 7016 },
						{ month: 3, 2014: 7202 },
						{ month: 4, 2014: 7851 },
						{ month: 5, 2014: 7481 },
						{ month: 6, 2014: 6532 },
						{ month: 7, 2014: 6498 },
						{ month: 8, 2014: 7191 },
						{ month: 9, 2014: 7596 },
						{ month: 10, 2014: 8057 },
						{ month: 11, 2014: 8373 },
						{ month: 12, 2014: 8636 }];
					};
					
					function getSecondMonthViews() {
						return [{ month: 1, 2014: 189742 },
						{ month: 2, 2014: 181623 },
						{ month: 3, 2014: 205351 },
						{ month: 4, 2014: 245625 },
						{ month: 5, 2014: 261319 },
						{ month: 6, 2014: 192786 },
						{ month: 7, 2014: 194752 },
						{ month: 8, 2014: 207017 },
						{ month: 9, 2014: 212665 },
						{ month: 10, 2014: 233580 },
						{ month: 11, 2014: 231503 },
						{ month: 12, 2014: 232824 }];
					};
					
					function getThirdMonthViews() {
						return [{ month: 1, 2014: 398},
						{ month: 2, 2014: 422},
						{ month: 3, 2014: 431},
						{ month: 4, 2014: 481},
						{ month: 5, 2014: 551},
						{ month: 6, 2014: 449},
						{ month: 7, 2014: 442},
						{ month: 8, 2014: 482},
						{ month: 9, 2014: 517},
						{ month: 10, 2014: 566},
						{ month: 11, 2014: 630},
						{ month: 12, 2014: 737}];
					};
					
					
					$('.first-month').dxSparkline(firstMonth);
					$('.second-month').dxSparkline(secondMonth);
					$('.third-month').dxSparkline(thirdMonth);
					
					
					// Realtime Network Stats
					var i = 0,
						rns_values = [130,150],
						rns2_values = [39,50],
						realtime_network_stats = [];
					
					for(i=0; i<=100; i++)
					{
						realtime_network_stats.push({ id: i, x1: between(rns_values[0], rns_values[1]), x2: between(rns2_values[0], rns2_values[1])});
					}
					
					$("#realtime-network-stats").dxChart({
						dataSource: realtime_network_stats,
						commonSeriesSettings: {
							type: "area",
							argumentField: "id"
						},
						series: [
							{ valueField: "x1", name: "Packets Sent", color: '#7c38bc', opacity: .4 },
							{ valueField: "x2", name: "Packets Received", color: '#000', opacity: .5},
						],
						legend: {
							verticalAlignment: "bottom",
							horizontalAlignment: "center"
						},
						commonAxisSettings: {
							label: {
								visible: false
							},
							grid: {
								visible: true,
								color: '#f5f5f5'
							}
						},
						legend: {
							visible: false
						},
						argumentAxis: {
					        valueMarginsEnabled: false
					    },
						valueAxis: {
							max: 500
						},
						animation: {
							enabled: false
						}
					}).data('iCount', i);
					
					$('#network-realtime-gauge').dxCircularGauge({
						scale: {
							startValue: 0,
							endValue: 200,
							majorTick: {
								tickInterval: 50
							}
						},
						rangeContainer: {
							palette: 'pastel',
							width: 3,
							ranges: [
								{ startValue: 0, endValue: 50, color: "#7c38bc" },
								{ startValue: 50, endValue: 100, color: "#7c38bc" },
								{ startValue: 100, endValue: 150, color: "#7c38bc" },
								{ startValue: 150, endValue: 200, color: "#7c38bc" },
							],
						},
						value: 140,
						valueIndicator: {
							offset: 10,
							color: '#7c38bc',
							type: 'triangleNeedle',
							spindleSize: 12
						}
					});
					
					setInterval(function(){  networkRealtimeChartTick(rns_values, rns2_values); }, 1000);
					setInterval(function(){ networkRealtimeGaugeTick(); }, 2000);
					setInterval(function(){ networkRealtimeMBupdate(); }, 3000);
					
					
					
					// CPU Usage Gauge
					$("#cpu-usage-gauge").dxCircularGauge({
						scale: {
							startValue: 0,
							endValue: 100,
							majorTick: {
								tickInterval: 25
							}
						},
						rangeContainer: {
							palette: 'pastel',
							width: 3,
							ranges: [
								{ startValue: 0, endValue: 25, color: "#68b828" },
								{ startValue: 25, endValue: 50, color: "#68b828" },
								{ startValue: 50, endValue: 75, color: "#68b828" },
								{ startValue: 75, endValue: 100, color: "#d5080f" },
							],
						},
						value: between(30, 90),
						valueIndicator: {
							offset: 10,
							color: '#68b828',
							type: 'rectangleNeedle',
							spindleSize: 12
						}
					});
					
					
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
			
			<div id="dasboard-item" class="row">
				<div  class="col-sm-3">
					
					<div  class="xe-widget xe-counter" data-count=".num" data-from="0" data-to="<?php echo $db->daily_sales(); ?>" data-suffix="" data-duration="2">
						<div class="xe-icon">
							<i class="linecons-money"></i>
						</div>
						<div id="dasboard-item1" class="xe-label">
							<?php echo '<strong class="num">'.$db->daily_sales().'</strong>'; ?>
							<span>Daily Sales (IDR)</span>
						</div>
					</div>

                    <div class="xe-widget xe-counter xe-counter-info" data-count=".num" data-from="1000" data-to="<?php echo $db->daily_trans(); ?>" data-duration="4" data-easing="true">
                        <div class="xe-icon">
                            <i class="fa-credit-card"></i>
                        </div>
                        <div id="dasboard-item2" class="xe-label">
                            <strong class="num"><?php echo $db->daily_trans(); ?></strong>
                            <span>Daily Trans</span>
                        </div>
                    </div>

                    <div class="xe-widget xe-counter xe-counter-purple" >
						<div class="xe-icon">
							<i class="linecons-user"></i>
						</div>
						<div id="dasboard-item3" class="xe-label">
							<?php echo '<strong class="num">'.(double)$db->daily_member().' of '.(double)$db->daily_member_all().'</strong>'; ?>
							<span>Daily Member</span>
						</div>
					</div>

				</div>
				<div class="col-sm-6">
					
					<div class="chart-item-bg">
						<div class="chart-label">
							<!--<div class="h3 text-secondary text-bold" data-count="this" data-from="0.00" data-to="14.85" data-suffix="%" data-duration="1">0.00%</div>
							<span class="text-medium text-muted">More visitors</span>-->
						</div>
						<div id="pageviews-visitors-chart" style="height: 298px;"></div>
					</div>
					
				</div>
				<div class="col-sm-3">
					
					<div class="chart-item-bg">
						<div class="chart-label chart-label-small">
							<!--<div class="h4 text-purple text-bold" data-count="this" data-from="0.00" data-to="95.8" data-suffix="%" data-duration="1.5">0.00%</div>-->
							<span class="text-small text-upper text-muted">Weekly Sales Chart</span>
						</div>
						<div id="server-uptime-chart" style="height: 134px;"></div>
					</div>
					
					<div class="chart-item-bg">
						<div class="chart-label chart-label-small">
							<div class="h4 text-secondary text-bold" data-suffix=" Jt" data-count="this" data-from="0.00" data-to="36" data-decimal="," data-duration="2">0</div>
							<span class="text-small text-upper text-muted">Avg. of </br>Weekly Sales</span>
						</div>
						<div id="sales-avg-chart" style="height: 134px; position: relative;">
							<div style="position: absolute; top: 25px; right: 0; left: 40%; bottom: 0"></div>
						</div>
					</div>
				</div>

                  <div class="col-sm-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">WEEKLY DATA (DAY)</h3>
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


                            <div class="chart-item-bg">
                                <div class="chart-label chart-label-small">
                                    <!--<div class="h4 text-purple text-bold" data-count="this" data-from="0.00" data-to="95.8" data-suffix="%" data-duration="1.5">0.00%</div>
                                    <span class="text-small text-upper text-muted">Weekly Chart</span>-->
                                </div>
                                <div id="server-uptime-chart2" style="height: 200px;"></div>
                            </div>
                        </div>
                    </div>
                  </div>
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">WEEKLY DATA (HOUR)</h3>
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


                            <div class="chart-item-bg">
                                <div class="chart-label chart-label-small">
                                    <!--<div class="h4 text-purple text-bold" data-count="this" data-from="0.00" data-to="95.8" data-suffix="%" data-duration="1.5">0.00%</div>
                                    <span class="text-small text-upper text-muted">Weekly Chart</span>-->
                                </div>
                                <div id="server-uptime-chart3" style="height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			
			
			<!-- Dashboard top of the month -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">TOP 5 Data</h3>
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
                            <div class="col-md-4">
                                <div class="panel panel-flat" >
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Top 5 Member Of The Month</h3>


                                    </div>

                                    <table class="table table-condensed">
                                        <?php echo $db->top5_member_month(); ?>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Top 5 Tenant Of The Month</h3>


                                    </div>

                                    <table class="table table-condensed">
                                        <?php echo $db->top5_tenant_month(); ?>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">New Member</h3>


                                    </div>

                                    <table class="table table-condensed">
                                        <?php echo $db->top5_member_new(); ?>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Gafik Tahunan range bulan dan sales -->

            <?php include('page/transaksi_sales.tpl');?>
            <?php// include('page/transaksi_sales_hour.tpl');?>
			<?php include('page/top5_member.tpl');?>
            <?php include('page/top5_tenant.tpl');?>
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
		
			
		<!-- start: Chat Section
		<div id="chat" class="fixed">
			
			<div class="chat-inner">
			
				
				<h2 class="chat-header">
					<a href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>
					
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>
				
				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");
					
					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();
						
						$chat_conversation.toggleClass('is-open');
						
						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});
					
					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
				});
				</script>
				
				
				<div class="chat-group">
					<strong>Favorites</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Work</strong>
					
					<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Other</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
				</div>
			
			</div>
			
			<!-- conversation template
			<div class="chat-conversation">
				
				<div class="conversation-header">
					<a href="#" class="conversation-close">
						&times;
					</a>
					
					<span class="user-status is-online"></span>
					<span class="display-name">Arlind Nushi</span> 
					<small>Online</small>
				</div>
				
				<ul class="conversation-body">	
					<li>
						<span class="user">Arlind Nushi</span>
						<span class="time">09:00</span>
						<p>Are you here?</p>
					</li>
					<li class="odd">
						<span class="user">Brandon S. Young</span>
						<span class="time">09:25</span>
						<p>This message is pre-queued.</p>
					</li>
					<li>
						<span class="user">Brandon S. Young</span>
						<span class="time">09:26</span>
						<p>Whohoo!</p>
					</li>
					<li class="odd">
						<span class="user">Arlind Nushi</span>
						<span class="time">09:27</span>
						<p>Do you like it?</p>
					</li>
				</ul>
				
				<div class="chat-textarea">
					<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
				</div>
				
			</div>
			
		</div>-->
		<!-- end: Chat Section -->
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
    <div><?php// echo $db->week_trans_day_month();?></div>
	
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
                                $('#dasboard-item1').load(location.href + ' #dasboard-item1').fadeToggle();
                                $('#dasboard-item1').load(location.href + ' #dasboard-item1').fadeIn("slow");
                               // $('#dash-1').fadeIn("10000");//.load(location.href + ' #val-trans-daily').fadeIn("slow");
                                //$('#val-member-daily').load(location.href + ' #val-member-daily').fadeIn("slow");
                                //$('#val-member').reload;
                        }

                    function startRefresh2() {
                        setTimeout(startRefresh,3000);.fadeToggle();
                        $('#dasboard-item2').load(location.href + ' #dasboard-item2').fadeToggle();
                        $('#dasboard-item2').load(location.href + ' #dasboard-item2').fadeIn("slow");
                        // $('#dash-1').fadeIn("10000");//.load(location.href + ' #val-trans-daily').fadeIn("slow");
                        //$('#val-member-daily').load(location.href + ' #val-member-daily').fadeIn("slow");
                        //$('#val-member').reload;
                    }

                });
    </script>


	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
    <script src="assets/js/moment.min.js"></script>

	<!-- Imported scripts on this page -->
	<script src="assets/js/xenon-widgets.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
	<script src="assets/js/toastr/toastr.min.js"></script>
    <script src="assets/js/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/datepicker/bootstrap-datepicker.js"></script>
    <script src="assets/js/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="assets/js/colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="assets/js/select2/select2.min.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
    <script src="assets/js/tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="assets/js/typeahead.bundle.js"></script>
    <script src="assets/js/handlebars.min.js"></script>
    <script src="assets/js/multiselect/js/jquery.multi-select.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>


    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="assets/js/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="assets/js/select2/select2.css">
    <link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
    <link rel="stylesheet" href="assets/js/multiselect/css/multi-select.css">


</body>
</html>