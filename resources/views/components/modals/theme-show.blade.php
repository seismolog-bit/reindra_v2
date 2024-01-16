<div class="modal fade" id="showModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="showModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white dark__text-gray-1100" id="showModalLabel">Show theme</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                        class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{ route('admin.theme.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12" id="showImage"></div>

                    <div class="col-md-12 form-floating">
                        <input class="form-control" id="showTitle" type="text" placeholder="Title"
                            name="title" value="{{ old('title') }}" readonly />
                        <label for="showTitle">Title</label>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select" name="theme_category" readonly disabled aria-label="Select category" id="showCategory">
                                <option selected="">Select category</option>
                                @foreach ($theme_categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            <label for="showCategory">Category</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="show" type="file" placeholder="Image"
                                name="image" value="{{ old('image') }}" readonly />
                            <label for="show">Image</label>
                        </div>
                    </div>
                    
                    <div class="col-md-12 form-floating">
                        <input class="form-control" id="showUrl" type="text" placeholder="Url"
                            name="url" value="{{ old('url') }}" readonly />
                        <label for="showUrl">URL</label>
                    </div>

                    <div class="col-md-12">
                        <select class="form-control" id="showTags" name="theme_tags[]" multiple @readonly(true) disabled>
                            @foreach ($theme_tags as $tags)
                                <option value="{{ $tags->id }}">{{ $tags->title }}</option>
                            @endforeach
                            {{-- <option value="Work" {{ in_array('Work', $data->categories) ? 'selected' : '' }}>Work</option>
                            <option value="Education" {{ in_array('Education', $data->categories) ? 'selected' : '' }}>Education</option> --}}
                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                        </select>
                        {{-- <select class="form-select" id="showTags" data-choices="data-choices" multiple=""
                            name="theme_tags[]" data-options='{"removeItemButton":true,"placeholder":true}'
                            >
                            <option value="">Add tags</option>
                            @foreach ($theme_tags as $tags)
                                <option value="{{ $tags->id }}">{{ $tags->title }}</option>
                            @endforeach
                        </select> --}}
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="showDescription" name="description" placeholder="Leave a comment here"
                                style="height: 100px" readonly></textarea><label for="showDescription">project overview</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>