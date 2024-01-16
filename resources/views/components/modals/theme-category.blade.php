<div class="modal fade" id="modalCreate" tabindex="-1" data-bs-backdrop="static" aria-labelledby="modalCreateLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white dark__text-gray-1100" id="modalCreateLabel">Add tag</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                        class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{ route('admin.theme-category.store') }}" method="post">
                    @csrf

                    <div class="col-md-12 form-floating">
                        <input class="form-control" id="floatTitle" type="text" placeholder="Tag title"
                            name="title" value="{{ old('title') }}" required autofocus />
                        <label for="floatTitle">Tag title</label>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-outline-secondary me-3" type="button"
                            data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white dark__text-gray-1100" id="editModalLabel">Edit tag</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                        class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
            </div>
            <div class="modal-body">
                <form id="editForm" class="row g-3">
                    @csrf
                    <input type="hidden" name="id" id="editId">

                    <div class="col-md-12 form-floating">
                        <input class="form-control" id="editTitle" type="text" placeholder="Tag title"
                            name="title" required autofocus />
                        <label for="editTitle">Tag title</label>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-outline-secondary me-3" type="button"
                            data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="button" onclick="updateData()">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
