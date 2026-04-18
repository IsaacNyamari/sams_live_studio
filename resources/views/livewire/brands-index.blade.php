<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($this->getBrands() as $brand)
                <tr>
                    <td>
                        <img src="{{ asset($brand->logo_path) }}" alt="{{ $brand->name }}" class="img-fluid"
                            style="max-width: 100px;">
                    </td>
                    <td>{{ $brand->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('brands.edit', $brand->id) }}">Edit</a>
                        <form action="{{ route('brands.destroy',$brand->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
