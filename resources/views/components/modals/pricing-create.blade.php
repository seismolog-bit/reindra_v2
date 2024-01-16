<div class="modal fade" id="modalCreate" tabindex="-1" data-bs-backdrop="static" aria-labelledby="modalCreateLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white dark__text-gray-1100" id="modalCreateLabel">Add pricing</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                        class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{ route('admin.pricing.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12 form-floating">
                        <input class="form-control" id="floatTitle" type="text" placeholder="Pricing title"
                            name="title" value="{{ old('title') }}" required autofocus />
                        <label for="floatTitle">Pricing title</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="floatTitle" type="text" placeholder="Price"
                                name="price" value="{{ old('price') }}" required />
                            <label for="floatTitle">Price</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="floatTitle" type="file" placeholder="Image"
                                name="image" value="{{ old('image') }}" required />
                            <label for="floatTitle">Image</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="summernote" name="description" placeholder="Leave a detail here"
                                style="height: 100px" required>{{ old('description') }}</textarea>
                            <label for="summernote">Description</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" id="recommended" type="checkbox" name="recommended"><label class="form-check-label fs-8" for="recommended">Is
                                recommended?</label>
                        </div>
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
