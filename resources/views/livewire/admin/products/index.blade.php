<div class="container-fluid">
    <div class="page-header">
        <h3 class="page-title">Products</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page"> All </li>
            </ol>
        </nav>
        <a href="/product/add" class="btn btn-info btn-sm">
            <i class="fa fa-plus-circle"> Add New</i>
        </a>
    </div>
    <!-- image card row starts here -->
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>
                        {{ $product->id }}
                    </td>
                    <td class="py-1">
                        <img src="{{ url( 'storage/'.$product->picture) }}" alt="image" />
                    </td>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->slug }}
                    </td>
                    <td>R{{$product->price}}</td>
                    <td>
                        <div class="d-inline-block">
                            <a href="" class="btn btn-info btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
