@php
    $nama = "Adit";
    $nilai = 80;
@endphp

@if ($nilai > 70)
    @php
        $ket = 'lulus';
    @endphp
    
@else
    @php
        $ket = 'gagal'
    @endphp
    
@endif

Siswa {{$nama}} dinyatakan {{$ket}}