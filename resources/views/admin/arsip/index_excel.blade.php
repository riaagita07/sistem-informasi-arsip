@php
    header('Content-Type:   application/vnd.ms-excel; charset=utf-8');
    header('Content-Disposition: attachment; filename=excel_download.xls'); //File name extension was wrong
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private', false);
@endphp
<table class="table dttable" border="1" cellpadding="2" cellspacing="2" style="border-collapse: collapse;">
    <tr>
        <td colspan="9">
            <h1 style="text-align: center;">Laporan Data Arsip
                <img style="margin-top: 10px;" src="{{ URL::to('/') }}/Logoo.jpg" alt="logo" width="90">
            </h1>
        </td>
    </tr>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Klasifikasi</th>
        <th>Nama Arsip</th>
        <th>Kategori</th>
        <th>Keterangan</th>
        <th>Pembuat</th>
        <th>Level</th>
        <th>Tanggal dibuat</th>
    </tr>

    @foreach ($arsip as $u)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $u->kode }}</td>
            <td>{{ @$u->codearsip->name }}</td>
            <td>{{ $u->namaarsip }}</td>
            <td>{{ @$u->category->name }}</td>
            <td>{{ $u->keterangan }}</td>
            <td>{{ @$u->pembuat->name }} </td>
            <td>{{ @$u->pembuat->role }} </td>
            <td>{{ @$u->created_at }}</td>

        </tr>
    @endforeach


</table>
