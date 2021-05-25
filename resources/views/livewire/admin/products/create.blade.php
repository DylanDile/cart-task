<div class="container p-4">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product / Add</h4>
                <p class="card-description">Add a new Product</p>
                <form class="forms-sample" wire:submit.prevent="AddProduct">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        <div wire:loading class="text-center font-weight-bold text-xxl-center">
                            Processing ...
                        </div>
                    <div class="row">
                        <div class="form-group col-sm">
                            <label for="exampleSelectGender">Product Category</label>
                            <select class="form-control @error('category_id') is-invalid @enderror" id="exampleSelectGender" wire:model.lazy="category_id">
                                <option value="" selected >Select..</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm">
                            <label for="exampleInputName1">Product Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName1" placeholder="Name" wire:model.lazy="name" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                    </div>

                    <div class="row">
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail3">Product Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror"  wire:model.lazy="price" placeholder="0.00" />
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm">
                            <label>
                               <b> Product Image</b>
                            </label>
                            <div class="">
                                @if ($picture)
                                    Preview:
                                    <img src="{{ $picture->temporaryUrl() }}" width="40%" height="30%">
                                @endif
                            </div>
                            <div class="input-group">
                                <input type="file" class="form-control file-upload-info @error('picture') is-invalid @enderror" placeholder="Upload Image" wire:model.lazy="picture" />
                                <span class="input-group-append">
                                </span>
                                @error('picture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Description / Specifications</label>
                        <textarea wire:model.lazy="description"
                            class="form-control @error('description') is-invalid @enderror"
                            id="exampleTextarea1"
                            rows="4"
                        ></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
