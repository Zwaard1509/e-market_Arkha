<table class="table">
    <thead class="thead-dark">
        <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Action</th>


        </tr>
    </thead>

    @foreach($produk as $prod)
    <tr class="text-center">
        <th scope="row">{{ $i = (!isset($i)?1:++$i)}}</th>
        <td>{{ $prod->nama_produk }}</td>

        <td>
            <button class="btn" data-toggle="modal" data-target="#modalFormProduk" data-mode="edit" data-id="{{ $prod->id }}" data-nama_produk="{{ $prod->nama_produk }}">
                <i class="fas fa-edit"></i>
            </button>
            <form action="{{ route('produk.destroy',$prod->id) }}" method="post" style="display:inline"></button>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn- btn-danger btn-delete"><i class="fas fa-trash"></i></button>

        </td>
        </form>
    </tr>
    @endforeach
    </tbody>
</table>