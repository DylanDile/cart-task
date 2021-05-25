<div class="container-fluid">
    <div class="page-header">
        <h3 class="page-title">Categories</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page"> All </li>
            </ol>
        </nav>
        <a href="/admin/categories/add" class="btn btn-info btn-sm">
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
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>
                            {{ $category->id }}
                        </td>

                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            {{ $category->slug }}
                        </td>
                        <td>
                            {{$category->description}}
                        </td>
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

