<table class="table">
    <thead class="thead-dark">
        <tr class="text-center">
            <th scope="col-1">No</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Produk Id</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Satuan</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Stock</th>
            <th scope="col">Ditarik</th>
            <th scope="col">User Id</th>
            <th scope="col">tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $b)
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i }}</td>
            <td>{{ $b->kode_barang }}</td>
            <td>{{ $b->produk_id }}</td>
            <td>{{ $b->nama_barang }}</td>
            <td>{{ $b->satuan }}</td>
            <td>{{ $b->harga_jual }}</td>
            <td>{{ $b->stock }}</td>
            <td>{{ $b->ditarik }}</td>
            <td>{{ $b->user_id }}</td>
            <td>
                <button class="btn" data-toggle="modal" data-target="#modalFormBarang" data-mode="edit" data-id="{{ $b->id }}" data-nama_barang="{{ $b->nama_barang }}">
                    <i class="fas fa-edit"></i>
                </button>
                <form action="{{ route('barang.destroy',$b->id) }}" method="post" style="display:inline"></button>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn- btn-danger btn-delete"><i class="fas fa-trash"></i></button>

            </td>
        </form>
        @endforeach
        </tr>
    </tbody>
</table>