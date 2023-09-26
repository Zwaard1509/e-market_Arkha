<table class="table">
    <thead class="thead-dark">
        <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Nama Pemasok</th>
            <th scope="col">Action</th>


        </tr>
    </thead>

    @foreach($pemasok as $pem)
    <tr class="text-center">
        <th scope="row">{{ $i = (!isset($i)?1:++$i)}}</th>
        <td>{{ $pem->Nama }}</td>

        <td>
            <button class="btn" data-toggle="modal" data-target="#modalFormPemasok" data-mode="edit" data-id="{{ $pem->id }}" data-nama_produk="{{ $pem->Nama }}">
                <i class="fas fa-edit"></i>
            </button>
            <form action="{{ route('pemasok.destroy',$pem->id) }}" method="post" style="display:inline"></button>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn- btn-danger btn-delete"><i class="fas fa-trash"></i></button>

        </td>
        </form>
    </tr>
    @endforeach
    </tbody>
</table>