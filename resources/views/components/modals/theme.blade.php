<div class="modal fade" id="modalCreate" tabindex="-1" data-bs-backdrop="static" aria-labelledby="modalCreateLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white dark__text-gray-1100" id="modalCreateLabel">Add theme</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                        class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{ route('admin.theme.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12 form-floating">
                        <input class="form-control" id="floatTitle" type="text" placeholder="Title"
                            name="title" value="{{ old('title') }}" required autofocus />
                        <label for="floatTitle">Title</label>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select" name="theme_category" required aria-label="Select category">
                                <option selected="">Select category</option>
                                @foreach ($theme_categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            <label for="floatType">Category</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="floatTitle" type="file" placeholder="Image"
                                name="image" value="{{ old('image') }}" required />
                            <label for="floatTitle">Image</label>
                        </div>
                    </div>
                    
                    <div class="col-md-12 form-floating">
                        <input class="form-control" id="floatUrl" type="text" placeholder="Url"
                            name="url" value="{{ old('url') }}" required />
                        <label for="floatURL">URL</label>
                    </div>

                    <div class="col-md-12">
                        <select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple=""
                            name="theme_tags[]" data-options='{"removeItemButton":true,"placeholder":true}'
                            required>
                            <option value="">Add tags</option>
                            @foreach ($theme_tags as $tags)
                                <option value="{{ $tags->id }}">{{ $tags->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="description" name="description" placeholder="Leave a comment here"
                                style="height: 100px" required></textarea><label for="description">project overview</label>
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
                    <div class="col-md-12" id="editImage"></div>

                    <div class="col-md-12 form-floating">
                        <input class="form-control" id="editTitle" type="text" placeholder="Tag title" name="title"
                            required autofocus />
                        <label for="editTitle">Tag title</label>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select" name="theme_category" required aria-label="Select category" id="editCategory">
                                <option selected="">Select category</option>
                                @foreach ($theme_categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            <label for="editCategory">Category</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" type="file" placeholder="Image"
                                name="image" value="{{ old('image') }}" />
                            <label for="image">Image</label>
                        </div>
                    </div>
                    
                    <div class="col-md-12 form-floating">
                        <input class="form-control" id="editUrl" type="text" placeholder="Url"
                            name="url" value="{{ old('url') }}" required />
                        <label for="editUrl">URL</label>
                    </div>

                    <div class="col-md-12">
                        <select class="form-control" id="editTags" name="theme_tags[]" multiple required>
                            @foreach ($theme_tags as $tags)
                                <option value="{{ $tags->id }}">{{ $tags->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="editDescription" name="description" placeholder="Leave a comment here"
                                style="height: 100px" readonly></textarea><label for="editDescription">project overview</label>
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

