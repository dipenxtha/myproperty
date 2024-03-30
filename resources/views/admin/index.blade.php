@extends('layouts.admin')

@section('title')
    Welcome to My Property
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Dashboard</h1>
            <html>
                <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Task', 'Hours per Day'],
                                <?php echo $chart1data ?>
                            ]);

                            var options = {
                                title: 'Properties By Categories'
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                            chart.draw(data, options);
                        }
                    </script>
                </head>
                <body>
                    <div>
                        <div id="piechart" style="width: 500px; height: 500px; display:flex;"></div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Property</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach($property as $prop)
                                    <tr> 
                                        <td>{{ $prop->user_id }}</td>
                                        <td>{{ $prop->id }}</td>
                                        <td>{{ optional($prop->category)->type }}</td>
                                        <td>{{ $prop->verification == "1" ? 'Verified' : 'Not-Verified' }}</td>
                                        <td>{{ $prop->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody> 
                        </table>
                    </div>
                </body>
            </html>
        </div>
    </div>
@endsection
@yield('scripts')
