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
            @forelse ($this->getBrands() as $brand)
                <tr>
                    <td>
                        <img src="{{ asset($brand->logo_path) }}" alt="{{ $brand->name }}" class="img-fluid"
                            style="max-width: 100px;">
                    </td>
                    <td>{{ $brand->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('brands.edit', $brand->id) }}">Edit</a>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modal_{{ $brand->id }}">Delete</button>
                    </td>
                </tr>
                <div class="modal fade" id="modal_{{ $brand->id }}" tabindex="-1" data-bs-backdrop="static"
                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">
                                    Delete {{ $brand->name }}?
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="{{ route('brands.destroy', $brand->id) }}" method="POST"
                                    style="display: inline;">
                                    <h3 class="text-center text-red-700 mb-4">This action cannot be undone. Are you sure
                                        you want to delete this brand?</h3>
                                    @csrf
                                    @method('DELETE')
                                    <div class="flex flex-row gap-3 justify-between">
                                        <button type="submit" class="btn btn-danger"
                                            data-bs-dismiss="modal">Confirm</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No brands found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
