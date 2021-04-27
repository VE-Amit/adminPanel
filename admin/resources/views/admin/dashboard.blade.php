@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
    <!-- ============================================================== -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <a href="{{route('admin.user.index')}}" class="white-box analytics-info" style="display: block">
                <h3 class="box-title">Total Users</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{$users->count()}}</span></li>
                </ul>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <a href="{{route('admin.subs.index')}}" class="white-box analytics-info" style="display: block">
                <h3 class="box-title">Total Subscriptions</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">{{$subs->count()}}</span></li>
                </ul>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <a href="{{route('admin.company.index')}}" class="white-box analytics-info" style="display: block">
                <h3 class="box-title">Total Companies</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{$companies->count()}}</span></li>
                </ul>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <a href="{{route('admin.category.index')}}" class="white-box analytics-info" style="display: block">
                <h3 class="box-title">Total Categories</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash4"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{$categories->count()}}</span></li>
                </ul>
            </a>
        </div>
        {{-- <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Events</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash5"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{$events->count()}}</span></li>
                </ul>
            </div>
        </div> --}}
    </div>
    {{-- row --}}
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Products Yearly Sales</h3>
                <ul class="list-inline text-right">
                    <li>
                        <h5><i class="fa fa-circle m-r-5 text-info"></i>Mac</h5> </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5 text-inverse"></i>Windows</h5> </li>
                </ul>
                <div id="ct-visits" style="height: 405px;"><div class="chartist-tooltip"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="370" class="ct-grid ct-horizontal"></line><line x1="197.85714285714286" x2="197.85714285714286" y1="15" y2="370" class="ct-grid ct-horizontal"></line><line x1="345.7142857142857" x2="345.7142857142857" y1="15" y2="370" class="ct-grid ct-horizontal"></line><line x1="493.57142857142856" x2="493.57142857142856" y1="15" y2="370" class="ct-grid ct-horizontal"></line><line x1="641.4285714285714" x2="641.4285714285714" y1="15" y2="370" class="ct-grid ct-horizontal"></line><line x1="789.2857142857143" x2="789.2857142857143" y1="15" y2="370" class="ct-grid ct-horizontal"></line><line x1="937.1428571428571" x2="937.1428571428571" y1="15" y2="370" class="ct-grid ct-horizontal"></line><line x1="1085" x2="1085" y1="15" y2="370" class="ct-grid ct-horizontal"></line><line y1="370" y2="370" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="340.4166666666667" y2="340.4166666666667" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="310.8333333333333" y2="310.8333333333333" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="281.25" y2="281.25" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="251.66666666666669" y2="251.66666666666669" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="222.08333333333334" y2="222.08333333333334" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="192.5" y2="192.5" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="162.91666666666666" y2="162.91666666666666" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="133.33333333333334" y2="133.33333333333334" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="103.75" y2="103.75" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="74.16666666666669" y2="74.16666666666669" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="44.583333333333314" y2="44.583333333333314" x1="50" x2="1085" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="1085" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,370L50,133.333C74.643,162.917,148.571,330.556,197.857,310.833C247.143,291.111,296.429,34.722,345.714,15C395,-4.722,444.286,172.778,493.571,192.5C542.857,212.222,592.143,123.472,641.429,133.333C690.714,143.194,740,251.667,789.286,251.667C838.571,251.667,887.857,143.194,937.143,133.333C986.429,123.472,1060.357,182.639,1085,192.5L1085,370Z" class="ct-area"></path><path d="M50,133.333C74.643,162.917,148.571,330.556,197.857,310.833C247.143,291.111,296.429,34.722,345.714,15C395,-4.722,444.286,172.778,493.571,192.5C542.857,212.222,592.143,123.472,641.429,133.333C690.714,143.194,740,251.667,789.286,251.667C838.571,251.667,887.857,143.194,937.143,133.333C986.429,123.472,1060.357,182.639,1085,192.5" class="ct-line"></path><line x1="50" y1="133.33333333333334" x2="50.01" y2="133.33333333333334" class="ct-point" ct:value="5"></line><line x1="197.85714285714286" y1="310.8333333333333" x2="197.86714285714285" y2="310.8333333333333" class="ct-point" ct:value="2"></line><line x1="345.7142857142857" y1="15" x2="345.7242857142857" y2="15" class="ct-point" ct:value="7"></line><line x1="493.57142857142856" y1="192.5" x2="493.58142857142855" y2="192.5" class="ct-point" ct:value="4"></line><line x1="641.4285714285714" y1="133.33333333333334" x2="641.4385714285714" y2="133.33333333333334" class="ct-point" ct:value="5"></line><line x1="789.2857142857143" y1="251.66666666666669" x2="789.2957142857143" y2="251.66666666666669" class="ct-point" ct:value="3"></line><line x1="937.1428571428571" y1="133.33333333333334" x2="937.1528571428571" y2="133.33333333333334" class="ct-point" ct:value="5"></line><line x1="1085" y1="192.5" x2="1085.01" y2="192.5" class="ct-point" ct:value="4"></line></g><g class="ct-series ct-series-b"><path d="M50,370L50,310.833C74.643,281.25,148.571,133.333,197.857,133.333C247.143,133.333,296.429,320.694,345.714,310.833C395,300.972,444.286,74.167,493.571,74.167C542.857,74.167,592.143,300.972,641.429,310.833C690.714,320.694,740,133.333,789.286,133.333C838.571,133.333,887.857,300.972,937.143,310.833C986.429,320.694,1060.357,212.222,1085,192.5L1085,370Z" class="ct-area"></path><path d="M50,310.833C74.643,281.25,148.571,133.333,197.857,133.333C247.143,133.333,296.429,320.694,345.714,310.833C395,300.972,444.286,74.167,493.571,74.167C542.857,74.167,592.143,300.972,641.429,310.833C690.714,320.694,740,133.333,789.286,133.333C838.571,133.333,887.857,300.972,937.143,310.833C986.429,320.694,1060.357,212.222,1085,192.5" class="ct-line"></path><line x1="50" y1="310.8333333333333" x2="50.01" y2="310.8333333333333" class="ct-point" ct:value="2"></line><line x1="197.85714285714286" y1="133.33333333333334" x2="197.86714285714285" y2="133.33333333333334" class="ct-point" ct:value="5"></line><line x1="345.7142857142857" y1="310.8333333333333" x2="345.7242857142857" y2="310.8333333333333" class="ct-point" ct:value="2"></line><line x1="493.57142857142856" y1="74.16666666666669" x2="493.58142857142855" y2="74.16666666666669" class="ct-point" ct:value="6"></line><line x1="641.4285714285714" y1="310.8333333333333" x2="641.4385714285714" y2="310.8333333333333" class="ct-point" ct:value="2"></line><line x1="789.2857142857143" y1="133.33333333333334" x2="789.2957142857143" y2="133.33333333333334" class="ct-point" ct:value="5"></line><line x1="937.1428571428571" y1="310.8333333333333" x2="937.1528571428571" y2="310.8333333333333" class="ct-point" ct:value="2"></line><line x1="1085" y1="192.5" x2="1085.01" y2="192.5" class="ct-point" ct:value="4"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="375" width="147.85714285714286" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 148px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2008</span></foreignObject><foreignObject style="overflow: visible;" x="197.85714285714286" y="375" width="147.85714285714286" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 148px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2009</span></foreignObject><foreignObject style="overflow: visible;" x="345.7142857142857" y="375" width="147.85714285714283" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 148px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2010</span></foreignObject><foreignObject style="overflow: visible;" x="493.57142857142856" y="375" width="147.8571428571429" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 148px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2011</span></foreignObject><foreignObject style="overflow: visible;" x="641.4285714285714" y="375" width="147.8571428571429" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 148px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2012</span></foreignObject><foreignObject style="overflow: visible;" x="789.2857142857143" y="375" width="147.85714285714278" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 148px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2013</span></foreignObject><foreignObject style="overflow: visible;" x="937.1428571428571" y="375" width="147.8571428571429" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 148px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2014</span></foreignObject><foreignObject style="overflow: visible;" x="1085" y="375" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2015</span></foreignObject><foreignObject style="overflow: visible;" y="340.4166666666667" x="10" height="29.583333333333332" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">1k</span></foreignObject><foreignObject style="overflow: visible;" y="310.83333333333337" x="10" height="29.583333333333332" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">1.5k</span></foreignObject><foreignObject style="overflow: visible;" y="281.25" x="10" height="29.583333333333336" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">2k</span></foreignObject><foreignObject style="overflow: visible;" y="251.66666666666669" x="10" height="29.58333333333333" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">2.5k</span></foreignObject><foreignObject style="overflow: visible;" y="222.08333333333337" x="10" height="29.58333333333333" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">3k</span></foreignObject><foreignObject style="overflow: visible;" y="192.5" x="10" height="29.583333333333343" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">3.5k</span></foreignObject><foreignObject style="overflow: visible;" y="162.91666666666666" x="10" height="29.583333333333343" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">4k</span></foreignObject><foreignObject style="overflow: visible;" y="133.33333333333334" x="10" height="29.583333333333314" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">4.5k</span></foreignObject><foreignObject style="overflow: visible;" y="103.75" x="10" height="29.583333333333343" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">5k</span></foreignObject><foreignObject style="overflow: visible;" y="74.16666666666669" x="10" height="29.583333333333314" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">5.5k</span></foreignObject><foreignObject style="overflow: visible;" y="44.583333333333314" x="10" height="29.58333333333337" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">6k</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="29.583333333333314" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">6.5k</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">7k</span></foreignObject></g></svg></div>
            </div>
        </div>
    </div>
</div>
@endsection