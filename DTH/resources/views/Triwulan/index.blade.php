@extends('dashboard.layouts.main')
<title>Data Triwulan</title>
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Triwulan</h1>
        {{-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/DTH/Cetak-Triwulan" target="_blank" class="btn btn-sm btn-outline-secondary">PDF<span
                        data-feather="printer"></span></a>
            </div>
        </div> --}}
    </div>


    @foreach( $groupedQuarterly as $i => $quarter )
    <div>
    
      Quarter {{ $i }}
      @foreach( $quarter as $data )
        @if ($data["bulan"] == 'Januari')
            <h1>ada januari</h1>
        @endif
        @if ($data["bulan"] == 'Juli')
            <h1>ada juli</h1>
        @endif
        
      @endforeach
    </div>
    @endforeach

@endsection
