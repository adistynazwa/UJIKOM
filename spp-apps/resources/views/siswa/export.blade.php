<table>
        <thead>
        <tr>
            <th><b>Kelas</b></th>
            <th><b>Nama</b></th>
            <th><b>NISN</b></th>
            <th><b>NIS</b></th>
            <th><b>Jenis Kelamin</b></th>
            <th><b>Alamat</b></th>
            <th><b>No.Telepon</b></th>
        </tr>
        </thead>
        <tbody>
        @foreach($siswa as $item)
            <tr>
                <td>{{ $item->kelas->nama }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nisn }}</td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->telp_wali }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>