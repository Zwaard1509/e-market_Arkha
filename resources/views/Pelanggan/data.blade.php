<table class="table">
    <thead class="thead-dark">
        <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Kode Pelanggan</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telp</th>
            <th scope="col">email</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pelanggan as $pel)
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i }}</td>
            <td>{{ $pel->kode_pelanggan }}</td>
            <td>{{ $pel->nama }}</td>
            <td>{{ $pel->alamat }}</td>
            <td>{{ $pel->no_telp }}</td>
            <td>{{ $pel->email }}</td>
            <td>
                <button class="btn" data-toggle="modal" data-target="#modalFormPelanggan" data-mode="edit" data-id="{{ $pel->id }}" data-nama_barang="{{ $pel->nama_barang }}">
                    <i class="fas fa-edit"></i>
                </button>
                <form action="{{ route('pelanggan.destroy',$pel->id) }}" method="post" style="display:inline"></button>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn- btn-danger btn-delete"><i class="fas fa-trash"></i></button>
            </td>
        </form>
        @endforeach
        </tr>
    </tbody>
</table>