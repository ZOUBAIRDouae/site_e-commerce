@extends('layouts.admin')


@section('content')


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">liste des Produits</h3>
        </div>
        <div>
            <a href="{{route('products.create')}}" class="btn btn-success" id="index">Ajouter un produit</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>description</th>
                        <th>price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }} DH</td>
                        <td>{{ $product->user->id }}</td>
                        <td>{{ $product->user->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->image }}</td>
                        <td>
                            <!-- Delete Button -->
                            <form action="{{ route('product.destroy', $article->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">
                                    <i class="fas fa-trash"></i> delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    

@endsection


@section('script')
<script>
        $(document).ready(function () {
        $(document).on('click', '#index', function (e) {
            e.preventDefault();

            let url = $(this).attr('href');

            $.ajax({
                type: "GET",
                url: url,
                success: function (res) {
                    bootbox.dialog({
                        title: "Create Product",
                        message: "<div class='createForm'></div>",

                    });

                    $('.createForm').html(res);
                }
            });
        });
    });


    $(document).on('submit','#addProduct', function(e){
        e.preventDefault();


        let formData = new FormData($('#addProduct')[0]);

        $.ajax({
            type: 'POST',
            url: "{{route('products.store')}}",
            data: formData,
            contentType: false,
            processData: false,
            success: function (res) {
                location.reload();
            }
        })
    })
</script> 
@endsection

