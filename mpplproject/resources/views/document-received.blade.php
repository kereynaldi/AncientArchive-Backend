{@foreach(array_reverse($surats->all()) as $surat)
"{{$surat->id}}":{"perihal":"{{$surat->perihal}}",
"created_at":"{{$surat->created_at->format("d-m-Y") }}",
"jenis_surat":"{{$surat->jenis_surat }}",
"nama_penerima":"{{$surat->nama_penerima }}",
"email_penerima":"{{$surat->email_penerima }}",
"deskripsi":"{{$surat->deskripsi }}",
"asal_surat":"{{$surat->asal_surat }}",
"tujuan_surat":"{{$surat->tujuan_surat }}"}@if ($surat->id != 1),@endif
@endforeach
}