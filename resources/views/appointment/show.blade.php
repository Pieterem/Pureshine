@extends('layouts.dashboard')

@push('page-styles')
    {{--- ---}}
@endpush

@section('content')
<!-- BEGIN: Header -->
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto my-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                        Aanvragen
                    </h1>
                </div>
                <div class="col-auto my-4">
                    <a href="{{ route('products.import') }}" class="btn btn-success add-list my-1"><i class="fa-solid fa-file-import me-3"></i>Importeren</a>
                    <a href="{{ route('products.export') }}" class="btn btn-warning add-list my-1"><i class="fa-solid fa-file-arrow-down me-3"></i>Exporteren</a>
                    <a href="{{ route('products.create') }}" class="btn btn-primary add-list my-1"><i class="fa-solid fa-plus me-3"></i>Toevoegen</a>
                    <a href="{{ route('products.index') }}" class="btn btn-danger add-list my-1"><i class="fa-solid fa-trash me-3"></i>Zoekopdracht wissen</a>
                </div>
            </div>

            @include('partials._breadcrumbs')
        </div>
    </div>

    @include('partials.session')
</header>

<div class="container px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-body">
            <div class="row mx-n4">
                <div class="col-lg-12 card-header mt-n4">
                    <form action="{{ route('products.index') }}" method="GET">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="form-group row align-items-center">
                                <label for="row" class="col-auto">Rij:</label>
                                <div class="col-auto">
                                    <select class="form-control" name="row">
                                        <option value="10" @if(request('row') == '10')selected="selected"@endif>10</option>
                                        <option value="25" @if(request('row') == '25')selected="selected"@endif>25</option>
                                        <option value="50" @if(request('row') == '50')selected="selected"@endif>50</option>
                                        <option value="100" @if(request('row') == '100')selected="selected"@endif>100</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row align-items-center justify-content-between">
                                <label class="control-label col-sm-3" for="search">Zoeken:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="search" class="form-control me-1" name="search" placeholder="Aanvraag zoeken" value="{{ request('search') }}">
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text bg-primary"><i class="fa-solid fa-magnifying-glass font-size-20 text-white"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <hr>

                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped align-middle">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nr.</th>
                                    <th scope="col">@sortablelink('product_name', 'Naam')</th>
                                    <th scope="col">Omschrijving</th>
                                    <th scope="col">@sortablelink('Services')</th>
                                    <th scope="col">Extra</th>
                                    <th scope="col">@sortablelink('selling_price', 'Prijs')</th>
                                    <th scope="col">Datum</th>
                                    <th scope="col">Tijdstip</th>
                                    <th scope="col">Actie</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $product)
                                <tr>
                                    <th scope="row">{{ (($appointments->currentPage() * (request('row') ? request('row') : 10)) - (request('row') ? request('row') : 10)) + $loop->iteration  }}</th>
                         
                                    <td>{{ $product->customer_id }}</td>
                                    <td>{{ $product->omschrijving }}</td>
                                    <td>{{ $product->service }}</td>
                                    <td>{{ $product->extra }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->date }}</td>
                                    <td>{{ $product->time }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-success btn-sm mx-1"><i class="fa-solid fa-eye"></i></a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-primary btn-sm mx-1"><i class="fa-solid fa-circle-check"></i></a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Weet je zeker dat je dit record wilt verwijderen?')">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{ $appointments->links() }}
            </div>
        </div>
    </div>
</div>
<!-- END: Hoofdinhoud van de pagina -->
@endsection

@push('page-scripts')
    {{--- ---}}
@endpush
