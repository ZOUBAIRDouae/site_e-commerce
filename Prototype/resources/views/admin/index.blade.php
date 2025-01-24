@extends('layouts.admin')


@section('content')


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">liste des Produits</h3>
        </div>
        <div>
            <a href="{{route('products.create')}}" class="btn btn-success" id="show">Ajouter un produit</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr  id="product-{{ $product->id }}">
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm btnDelete" data-id="{{ $product->id }}">
                                Supprimer
                            </button>
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
        // Handle the 'create product' button click
        $(document).on('click', '#show', function (e) {
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

                    // Load the HTML form into the dialog
                    $('.createForm').html(res);
                }
            });
        });

        // Handle form submission
        $(document).on('submit', '#addProduct', function (e) {
            e.preventDefault();

            let formData = new FormData($('#addProduct')[0]);

            $.ajax({
                type: 'POST',
                url: "{{route('products.store')}}",
                data: formData,
                contentType: false,
                processData: false,
                success: function (res) {
                    if (res.success) {
                        
                        $('table tbody').append(`
                            <tr  id="product-${res.product.id}">
                                <td>${res.product.id}</td>
                                <td>${res.product.name}</td>
                                <td>${res.product.description}</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm btnDelete" data-id="${res.product.id}">
                                        Supprimer
                                    </button>
                                </td>
                            </tr>
                        `);

                        // Close the modal
                        bootbox.hideAll();

                        // Optionally reset the form
                        $('#addProduct')[0].reset();
                    } else {
                        alert('Error: ' + res.message);
                    }
                },
                error: function (xhr, status, error) {
                    alert('Request failed: ' + error);
                }
            });
        });

       


        $(document).on('click', '.btnDelete', function () {
    let productId = $(this).data('id'); // Récupère l'ID du produit
    let url = "{{ route('products.destroy', ':id') }}".replace(':id', productId); // Construit l'URL dynamique

    // Afficher une boîte de confirmation avec Bootbox
    bootbox.confirm({
        message: "Voulez-vous vraiment supprimer ce produit ?",
        size: 'small',
        backdrop: true,
        buttons: {
            confirm: {
                label: 'Oui, Supprimer',
                className: 'btn btn-danger' // Custom button style for "Yes"
            },
            cancel: {
                label: 'Annuler',
                className: 'btn btn-secondary' // Custom button style for "Cancel"
            }
        },
        callback: function (result) {
            if (result) {
                // Si l'utilisateur confirme, lance une requête AJAX
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        _token: "{{ csrf_token() }}", // Protection CSRF
                        _method: "DELETE" // Méthode DELETE pour Laravel
                    },
                    success: function (response) {
                        if (response.success) {
                            // Supprime dynamiquement la ligne correspondante
                            $('#product-' + productId).fadeOut(0, function () {
                                $(this).remove();
                            });

                            // Affiche une notification de succès avec un nouveau style
                            let successAlert = `
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Succès!</strong> ${response.message || "Produit supprimé avec succès."}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            `;
                            $('.container-fluid').prepend(successAlert); // Add the alert to the page

                        } else {
                            // Si "success" est false dans la réponse
                            let errorAlert = `
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Erreur!</strong> ${response.message || "Une erreur est survenue."}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            `;
                            $('.container-fluid').prepend(errorAlert); // Add the error alert
                        }
                    },
                    error: function (xhr) {
                        // Gère les erreurs HTTP ou réseau
                        let message = xhr.responseJSON?.message || "Une erreur s'est produite. Veuillez réessayer.";
                        let errorAlert = `
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erreur!</strong> ${message}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        `;
                        $('.container-fluid').prepend(errorAlert); // Add the error alert
                    }
                });
            }
        }
    });
});



    });
</script>
@endsection
