<!-- resources/views/plan/show.blade.php -->
    <div class="container">
        <h1>{{ $plan->name }}</h1>
        <p>Target uang yang dikumpulkan: Rp. {{ number_format($plan->goal, 0, ',', '.') }}</p>
        <p>tanggal mulai: {{ $plan->start_date }}</p>
        <p>tanggal berakhir: {{ $plan->date }}</p>
        <p>Cicilan perbulan: Rp. {{ number_format($installment, 2, ',', '.') }}</p>
        <a href="{{ route('plans.index') }}" class="btn btn-secondary">Back to Plans</a>
    </div>
