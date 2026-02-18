<div class="modal fade" id="editModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white dark__text-gray-1100" id="editModalLabel">Edit pricing</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                        class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
            </div>
            <div class="modal-body">
                <form id="editForm" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="editId">

                    <div class="col-md-12 form-floating">
                        <input class="form-control" id="editTitle" type="text" placeholder="Pricing title"
                            name="title" required autofocus />
                        <label for="editTitle">Pricing title</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="editPrice" type="text" placeholder="Price"
                                name="price" />
                            <label for="editPrice">Price</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" type="file" placeholder="Image" name="image" />
                            <label for="editImage">Image</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control editDescription" id="editDescription" name="description" placeholder="Leave a detail here"
                                style="height: 100px" required>{{ old('description') }}</textarea>
                            <label for="editDescription">Description</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="editRecommended"
                                name="recommended"><label class="form-check-label fs-8" for="recommended">Is
                                recommended?</label>
                        </div>
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
