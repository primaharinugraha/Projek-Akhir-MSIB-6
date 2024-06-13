@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div>JUMLAH PROYEK{{ $plansCount }}</div>
<div>TOTAL PERHITUNGAN ASSET{{ $assetsTotal }}</div>
<div>TOTAL PERHITUNGAN LIABILITY{{ $liabilitiesTotal }}</div>
<div>TOTAL PERHITUNGAN ASSET - LIABILITY{{ $financesTotal }}</div>
<div>JUMLAH ASSET{{ $assetsCount }}</div>
<div>JUMLAH LIABILITY{{ $liabilitiesCount }}</div>
<div>TOTAL PERHITUNGAN ASSET DALAM BULAN{{ $assetsByMonth }}</div>
<div>TOTAL PERHITUNGAN LIABILITY DALAM BULAN{{ $liabilitiesByMonth }}</div>