<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>管理中心</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <base href="../{{$theme}}/dist/">
    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="../assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css"/>
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css"/>

    <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="../assets/styles/app.min.css">
    <link rel="stylesheet" href="../assets/styles/font.css" type="text/css"/>
</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <!-- aside -->
    <div id="aside" class="app-aside modal fade nav-expand">
        <div class="left navside black dk" layout="column">
            <div class="navbar no-radius">
                <div ui-include="'../views/blocks/navbar.brand.html'"></div>
            </div>
            <div flex-no-shrink>
                <div ui-include="'../views/blocks/aside.top.2.html'"></div>
            </div>
            <div flex class="hide-scroll">
                <nav class="scroll nav-stacked nav-active-primary">
                    <div ui-include="'../views/blocks/nav.html'"></div>
                </nav>
            </div>
            <div flex-no-shrink>
                <div ui-include="'../views/blocks/aside.bottom.0.html'"></div>
            </div>
        </div>
    </div>
    <!-- / aside -->

    <!-- content -->
    <div id="content" class="app-content box-shadow-z1" role="main">
        <div class="app-header white box-shadow">
            <div ui-include="'../views/blocks/header.html'"></div>
        </div>
        <div class="app-footer">
            <div ui-include="'../views/blocks/footer.html'"></div>
        </div>
        <div ui-view class="app-body" id="view">

            <!-- ############ PAGE START-->
            <div class="row-col primary">
                <div class="col-xs-4 lt">
                    <div class="p-a-md">
			<span class="pull-right">
				<i class="fa text fa-caret-up text-success"></i>
			</span>
                        <span class="_500">Views</span>
                        <div class="h3 _700 m-y">
                            2,045k
                        </div>
                        <div>
                            <span ui-jp="sparkline" ui-refresh="app.setting.color"
                                  ui-options="[2,3,4,6,5,4,3,5,4,3,4,3,4,3,2,2], {type:'line', height:20, width: '70', lineWidth:2, valueSpots:{'0:':'#fff'}, lineColor:'#fff', spotColor:'#fff', fillColor:'transparent', highlightLineColor:'#fff', spotRadius:0}"
                                  class="sparkline inline"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 bg">
                    <div class="p-a-md">
			<span class="pull-right">
				<i class="fa text fa-caret-down text-warn"></i>
			</span>
                        <span class="_500">Referrals</span>
                        <div class="h3 _700 m-y">
                            69k
                        </div>
                        <div>
                            <span ui-jp="sparkline" ui-refresh="app.setting.color"
                                  ui-options="[4,4,3,5,4,3,5,3,4,6,5,3,2,3,4,6], {type:'line', height:20, width: '70', lineWidth:2, valueSpots:{'0:':'#fff'}, lineColor:'#fff', spotColor:'#fff', fillColor:'transparent', highlightLineColor:'#fff', spotRadius:0}"
                                  class="sparkline inline"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 dk">
                    <div class="p-a-md">
			<span class="pull-right">
				<i class="fa text fa-caret-down text-danger"></i>
			</span>
                        <span class="_500">Members</span>
                        <div class="h3 _700 m-y">
                            4,560
                        </div>
                        <div>
                            <span ui-jp="sparkline" ui-refresh="app.setting.color"
                                  ui-options="[2,1,5,3,4,3,5,4,3,5,6,7,6,4,3,2], {type:'line', height:20, width: '70', lineWidth:2, valueSpots:{'0:':'#fff'}, lineColor:'#fff', spotColor:'#fff', fillColor:'transparent', highlightLineColor:'#fff', spotRadius:0}"
                                  class="sparkline inline"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-col primary">
                <div class="col-md-8">
                    <div class="row-col">
                        <div class="col-sm-6">
                            <div class="p-a-md p-r-0">
                                <h6 class="m-b-sm">Sales Overview</h6>
                                <p class="text-sm">
                                    <i class="fa fa-caret-down text-warn"></i> <span class="text-muted">Min:</span>
                                    $39,050
                                    <i class="fa fa-caret-up text-success m-l-sm"></i> <span
                                        class="text-muted">Max:</span> $78,560
                                </p>
                                <div class="list no-padding">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <div class="progress progress-xs w-64 m-y-sm">
                                                <div class="progress-bar dark-white" style="width: 45%"></div>
                                            </div>
                                        </div>
                                        <div class="list-body">
                                            Google advertise network
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="list-left">
                                            <div class="progress progress-xs w-64 m-y-sm">
                                                <div class="progress-bar dark-white" style="width: 25%"></div>
                                            </div>
                                        </div>
                                        <div class="list-body">
                                            Apple app store
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="list-left">
                                            <div class="progress progress-xs w-64 m-y-sm">
                                                <div class="progress-bar dark-white" style="width: 55%"></div>
                                            </div>
                                        </div>
                                        <div class="list-body">
                                            Flatty inc.
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="list-left">
                                            <div class="progress progress-xs w-64 m-y-sm">
                                                <div class="progress-bar dark-white" style="width: 35%"></div>
                                            </div>
                                        </div>
                                        <div class="list-body">
                                            Other app stores.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 dk">
                            <div class="p-a-md">
                                <div class="clearfix m-b-lg">
                                    <div class="pull-right">
                                        <ul class="nav">
                                            <li class="nav-item inline">
                                                <a class="nav-link">
                                                    <i class="material-icons md-18">&#xe863;</i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span>Total: $3,000</span>
                                </div>
                                <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
		              [{data: 10, label: &#x27;Apple&#x27;}, {data: 15, label: &#x27;Google&#x27;}, {data: 35, label: &#x27;Flatty&#x27;}, {data: 45, label: &#x27;Other&#x27;}],
		              {
		                series: { pie: { show: true, tilt: 0.6, offset:{left: -30}, stroke: { width: 0 }, label: { show: true, threshold: 0.05 } } },
		                legend: {backgroundColor: 'transparent'},
		                colors: ['rgba(255,255,255,0.5)','rgba(255,255,255,0.6)','rgba(255,255,255,0.8)','#0cc2aa'],
		                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#fff' },   
		                tooltip: true,
		                tooltipOpts: { content: '%s: %p.0%' }
		              }
		            " style="height:200px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 lt v-b">
                    <div class="p-a-md">
                        <h6 class="m-b-sm">Market in 2015</h6>
                        <small class="text-muted">Quick view of the trending of this year.</small>
                    </div>
                    <div style="overflow-x:hidden">
                        <div style="margin: 0 -2px">
                            <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { 
	                  data: [[1, 6.1], [2, 6.3], [3, 6.4], [4, 6.6], [5, 7.0], [6, 7.7], [7, 8.3]], 
	                  points: { show: true, radius: 0}, 
	                  splines: { show: true, tension: 0.45, lineWidth: 3, fill: 0.1 } 
	                }
	              ],
	              {
	                colors: ['#fff'],
	                series: { shadowSize: 3 },
	                xaxis: { show: false, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: false, font: { color: '#ccc' }, max:10, min: 2},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height:224px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-col b-b white">
                <div class="col-md-8 b-r">
                    <div class="p-a-md">
                        <h6>Open Projects <span class="label">9</span></h6>
                        <small>Your data status</small>
                        <ul class="list no-padding">
                            <li class="list-item">
                                <a herf class="list-left">
		          	<span class="w-40 circle _600 text-lg text-white blue-200">
		            	B
                        </apan>
                                </a>
                                <div class="list-body">
                                    <div class="m-y-sm pull-right">
                                        <a href class="btn btn-xs white"><i class="fa fa-pencil"></i></a>
                                        <a href class="btn btn-xs white"><i class="fa fa-remove"></i></a>
                                    </div>
                                    <div><a href>Broadcast web app mockup</a></div>
                                    <div class="text-sm">
                                        <span class="text-muted"><strong>5</strong> tasks, <strong>3</strong> issues</span>
                                        <span class="label"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <a herf class="list-left">
		          	<span class="w-40 circle _600 text-lg text-white blue-200">
		            	G
                        </apan>
                                </a>
                                <div class="list-body">
                                    <div class="m-y-sm pull-right">
                                        <a href class="btn btn-xs white"><i class="fa fa-pencil"></i></a>
                                        <a href class="btn btn-xs white"><i class="fa fa-remove"></i></a>
                                    </div>
                                    <div><a href>GoodDesign Bootstrap 4 migration</a></div>
                                    <div class="text-sm">
                                        <span class="text-muted"><strong>35</strong> tasks, <strong>6</strong> issues</span>
                                        <span class="label"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <a herf class="list-left">
		          	<span class="w-40 circle _600 text-lg text-white blue-200">
		            	#
                        </apan>
                                </a>
                                <div class="list-body">
                                    <div class="m-y-sm pull-right">
                                        <a href class="btn btn-xs white"><i class="fa fa-pencil"></i></a>
                                        <a href class="btn btn-xs white"><i class="fa fa-remove"></i></a>
                                    </div>
                                    <div><a href>#Hashtag android app develop</a></div>
                                    <div class="text-sm">
                                        <span class="text-muted"><strong>52</strong> tasks, <strong>13</strong> issues</span>
                                        <span class="label"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <a herf class="list-left">
		          	<span class="w-40 circle _600 text-white blue-200">
		            	<i class="fa fa-lg fa-google"></i>
                        </apan>
                                </a>
                                <div class="list-body">
                                    <div class="m-y-sm pull-right">
                                        <a href class="btn btn-xs white"><i class="fa fa-pencil"></i></a>
                                        <a href class="btn btn-xs white"><i class="fa fa-remove"></i></a>
                                    </div>
                                    <div><a href>Google material design application</a></div>
                                    <div class="text-sm">
                                        <span class="text-muted"><strong>15</strong> tasks, <strong>3</strong> issues</span>
                                        <span class="label"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <a herf class="list-left">
		          	<span class="w-40 circle _600 text-white blue-200">
		            	<i class="fa fa-lg fa-facebook"></i>
                        </apan>
                                </a>
                                <div class="list-body">
                                    <div class="m-y-sm pull-right">
                                        <a href class="btn btn-xs white"><i class="fa fa-pencil"></i></a>
                                        <a href class="btn btn-xs white"><i class="fa fa-remove"></i></a>
                                    </div>
                                    <div><a href>Facebook connection web application</a></div>
                                    <div class="text-sm">
                                        <span class="text-muted"><strong>30</strong> tasks, <strong>5</strong> issues</span>
                                        <span class="label"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-a-md">
                        <a href class="pull-right"><span class="label blue">910</span></a>
                        <h6>Tickets</h6>
                        <small>230 tickets need answerns</small>
                        <ul class="list no-padding">
                            <li class="list-item">
                                <a herf class="list-left">
	            	<span class="w-40 avatar red-100">
	                  <span>C</span>
	                  <i class="on b-white bottom"></i>
	                </span>
                                </a>
                                <div class="list-body">
                                    <div><a href>Chris Fox</a></div>
                                    <a href class="text-muted">How to create an icon like the demo app</a>
                                </div>
                            </li>
                            <li class="list-item">
                                <a herf class="list-left">
	              <span class="w-40 avatar purple-100">
	                  <span>M</span>
	                  <i class="on b-white bottom"></i>
	              </span>
                                </a>
                                <div class="list-body">
                                    <div><a href>Mogen Polish</a></div>
                                    <a href class="text-muted">How to build my custom color</a>
                                </div>
                            </li>
                            <li class="list-item">
                                <a herf class="list-left">
	              <span class="w-40 avatar blue-200">
	                  <span>J</span>
	                  <i class="off b-white bottom"></i>
	              </span>
                                </a>
                                <div class="list-body">
                                    <div><a href>Joge Lucky</a></div>
                                    <a href class="text-muted">What is the app requriements</a>
                                </div>
                            </li>
                            <li class="list-item">
                                <a herf class="list-left">
	              <span class="w-40 avatar warning">
	                  <span>F</span>
	                  <i class="on b-white bottom"></i>
	              </span>
                                </a>
                                <div class="list-body">
                                    <div><a href>Folisise Chosielie</a></div>
                                    <a href class="text-muted">Where to find the API</a>
                                </div>
                            </li>
                            <li class="list-item">
                                <a herf class="list-left">
	            	<span class="w-40 avatar green-100">
	                  <span>P</span>
	                  <i class="away b-white bottom"></i>
	                </span>
                                </a>
                                <div class="list-body">
                                    <div><a href>Peter</a></div>
                                    <a href class="text-muted">How to add my router</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / content -->

    <!-- theme switcher -->
    <div id="switcher">
        <div ui-include="'../views/blocks/switcher.html'"></div>
    </div>
    <!-- / -->

    <!-- ############ LAYOUT END-->

</div>
<script src="scripts/app.html.js"></script>
</body>
</html>
