<div>
    Knowing others is intelligence; knowing yourself is true wisdom.
    {{-- {{ Auth::user()->getAllPermissions() }} --}}
    {{-- <h1>{{ Auth::user()->removeRole('dashboard') }}</h1> --}}
    {{-- <h1>{{ Auth::user()->givePermissionTo('user') }}</h1> --}}
    {{-- <h1>{{ Auth::user()->givePermissionTo('personalprofile') }}</h1> --}}
    {{-- <h1>{{ Auth::user()->givePermissionTo('income') }}</h1>
    <h1>{{ Auth::user()->givePermissionTo('expenses') }}</h1> --}}
    {{-- <h1>{{ Auth::user()->revokePermissionTo('report') }}</h1> --}}
    {{-- <h1>{{ Auth::user()->revokePermissionTo('setting') }}</h1> --}}

    {{-- <h1>income:{{ Auth::user()->can('income create') }}</h1>
    <h1>user:{{ Auth::user()->can('user') }}</h1> --}}


    {{-- {{ Auth::user()->getAllPermissions() }} --}}

    {{-- @foreach (Auth::user()->getAllPermissions() as $value)
        <h1>{{ $value->name }}</h1>
    @endforeach --}}

    <div class="grid grid-cols-2 gap-4">
        <div>
            <canvas id="bar-chart" width="800" height="450"></canvas>
        </div>
        <div>
            <canvas id="line-chart" width="800" height="450"></canvas>
        </div>
        <div>
            <canvas id="pie-chart" width="800" height="450"></canvas>
        </div>
        <div>
            <canvas id="doughnut-chart" width="800" height="450"></canvas>
        </div>
    </div>

</div>
<script>
    // Bar chart
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: [2478, 5267, 734, 784, 433]
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });

    //
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
            labels: [1500, 1600, 1700, 1750, 1800, 1850, 1900, 1950, 1999, 2050],
            datasets: [{
                data: [86, 114, 106, 106, 107, 111, 133, 221, 783, 2478],
                label: "Africa",
                borderColor: "#3e95cd",
                fill: false
            }, {
                data: [282, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267],
                label: "Asia",
                borderColor: "#8e5ea2",
                fill: false
            }, {
                data: [168, 170, 178, 190, 203, 276, 408, 547, 675, 734],
                label: "Europe",
                borderColor: "#3cba9f",
                fill: false
            }, {
                data: [40, 20, 10, 16, 24, 38, 74, 167, 508, 784],
                label: "Latin America",
                borderColor: "#e8c3b9",
                fill: false
            }, {
                data: [6, 3, 2, 2, 7, 26, 82, 172, 312, 433],
                label: "North America",
                borderColor: "#c45850",
                fill: false
            }]
        },
        options: {
            title: {
                display: true,
                text: 'World population per region (in millions)'
            }
        }
    });
    //
    new Chart(document.getElementById("pie-chart"), {
        type: 'pie',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: [2478, 5267, 734, 784, 433]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });

    new Chart(document.getElementById("doughnut-chart"), {
        type: 'doughnut',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: [2478, 5267, 734, 784, 433]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });
</script>
