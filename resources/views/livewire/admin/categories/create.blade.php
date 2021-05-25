<div class="container-fluid">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category / Add</h4>
                <p class="card-description">Add a new Product Category</p>
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
                <form class="forms-sample" wire:submit.prevent="AddCategory">
                    <div class="row">
                        <div class="form-group col-sm">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName1" placeholder="Name" wire:model.lazy="name" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm">
                            <label for="exampleTextarea1">Description</label>
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
                    </div>

                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
