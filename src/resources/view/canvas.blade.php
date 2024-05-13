<canvas id="{{ $chartSign }}"></canvas>

<script>
    new Chart(document.getElementById("{{ $chartSign }}"), @json($chartOptions));
</script>