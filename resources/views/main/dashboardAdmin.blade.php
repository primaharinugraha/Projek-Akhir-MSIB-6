@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div>{{ $usersCount }}</div>
<div>{{ $plansCount }}</div>
<div>{{ $articlesCount }}</div>
<div>{{ $assetsTotal }}</div>
<div>{{ $liabilitiesTotal }}</div>
<div>{{ $financesTotal }}</div>
<div>{{ $assetsCount }}</div>
<div>{{ $liabilitiesCount }}</div>
<div>{{ $assetsByMonth }}</div>
<div>{{ $liabilitiesByMonth }}</div>
