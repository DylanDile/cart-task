<div class="container-fluid">
    <div class="page-header">
        <h3 class="page-title">Categories</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page"> All </li>
            </ol>
        </nav>
    </div>
    <hr>
   <div class="row">
       @foreach($categories as $category)
       <div class="card card-stat stretch-card mb-3 col-sm-4">
           <div class="card-body">
               <div class="d-flex justify-content-between">
                   <div class="text-white">
                       <h3 class="font-weight-bold mb-0">
                           {{ $category->name }}
                       </h3>
                       <h6>
                           {{ $category->description  }}
                       </h6>
                       <div class="badge badge-danger">
                           {{ count($category->products) }}
                       </div>
                   </div>
                   <div class="flot-bar-wrapper">
                       <a wire:click="ViewCategory({{ $category->id }})" class="btn btn-primary">View Products</a>
                   </div>
               </div>
           </div>
       </div>
       @endforeach

   </div>
</div>
