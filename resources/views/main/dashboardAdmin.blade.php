@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div>JUMLAH USER{{ $usersCount }}</div>
<div>JUMLAH PROYEK{{ $plansCount }}</div>
<div>JUMLAH ARTICLE DAN VIDEO{{ $articlesCount }}</div>
<div>TOTAL PERHITUNGAN ASSET{{ $assetsTotal }}</div>
<div>TOTAL PERHITUNGAN LIABILITY{{ $liabilitiesTotal }}</div>
<div>TOTAL ASSET - LIABILITY{{ $financesTotal }}</div>
<div>JUMLAH ASSET{{ $assetsCount }}</div>
<div>JUMLAH LIABILITY{{ $liabilitiesCount }}</div>
<div>TOTAL PERHITUNGAN ASSET DALAM BULAN{{ $assetsByMonth }}</div>
<div>TOTAL PERHITUNGAN LIABILITY DALAM BULAN{{ $liabilitiesByMonth }}</div>
