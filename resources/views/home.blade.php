@extends('layouts.app')

@section('content')
<body style="background-color: #d9dfe5;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="card-header" style="background-color: #2E4053; color: #fff">
                        <marquee behavior="" direction="">Welcome to Qwesi Ventures Inventory Management System</marquee>
                    </h4>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 class="card-title" style="text-align: center;">RECENT UPDATES</h5>

                        <hr>
                        <h5 class="card-title" style="text-align: center; color: #2E4053;">Sales Overview</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card text-center" style="background-color: #3498db; color: #fff;">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2">Today's Sales</h6>
                                        <h4 class="card-title">&#8373;500</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card text-center" style="background-color: #e74c3c; color: #fff;">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2">Monthly Sales</h6>
                                        <h4 class="card-title">&#8373;80,000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <hr>

                        <h5 class="card-title">Product Sales Chart</h5>
                        <canvas id="productSalesChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the canvas element
            var ctx = document.getElementById('productSalesChart').getContext('2d');

            // Define the data for the chart
            var data = {
                labels: ['MILO', 'IPHONE 13 PRO', 'VINTAGE', 'PAVILION', 'JEANS', 'PEAK', 'PAVILION'],
                datasets: [{
                    label: 'Top Sales',
                    data: [120, 300, 200, 100, 167, 180, 260],
                    backgroundColor: ['#3498db', '#e74c3c', '#2ecc71', '#9b59b6', '#f1c40f', '#34495e', '#e67e22']
                }]
            };

            // Create the bar chart
            var chart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 10
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>

<style>
    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .card-header {
        background-color: #2E4053;
        color: #fff;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        padding: 10px;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        margin-bottom: 10px;
    }

    .list-group-item {
        border: none;
        padding: 5px 15px;
    }

    .list-group-item a {
        color: #2E4053;
        text-decoration: none;
    }

    .list-group-item a:hover {
        color: #3498db;
    }

    /* Custom styles for the product sales chart */
    #productSalesChart {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }
</style>
@endsection
