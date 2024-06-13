@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div>{{ $plansCount }}</div>
<div>{{ $assetsTotal }}</div>
<div>{{ $liabilitiesTotal }}</div>
<div>{{ $financesTotal }}</div>
<div>{{ $assetsCount }}</div>
<div>{{ $liabilitiesCount }}</div>
<div>{{ $assetsByMonth }}</div>
<div>{{ $liabilitiesByMonth }}</div>