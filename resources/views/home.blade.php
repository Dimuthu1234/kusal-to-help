@extends('layouts.app')

@section('content')
   <div class="columns is-marginless is-centered">
        <div class="column is-12">
            <div class="card"> 
                <header class="card-header w3-orange">
                    <p class="card-header-title">Dashboard</p>
                </header>

                <div class="card-content">
                  <canvas id="myChart" width="100%" height="60"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 159, 64, 0.0)'
            ],
            borderColor: [
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        },
        
        {
            label: '# of Votes',
            data: [10, 15, 2, 7, 5, 3],
            backgroundColor: [
                'rgba(255, 159, 64, 0.0)'
            ],
            borderColor: [
                'rgba(205, 159, 64, 1)'
            ],
            borderWidth: 2
        }
        
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush