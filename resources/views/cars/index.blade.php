@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="col-md-8 mx-auto pb-3 border-bottom">
            <div class="btn-group btn-group-sm">
                <a class="btn btn-secondary fw-bold" href="cars/create" type="button">&plus; Add Car</a>
            </div>
        </div>

        @foreach($cars_data as $car)
            <div class="col-md-8 my-5 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title text-uppercase">{{ $car->name }}</h1>
                        <div class="row align-items-center">
                            <h6 class="card-subtitle text-primary fw-bold col-6">FOUNDED: {{ $car->founded }}</h6>
                            <div class="btn-group btn-group-sm col-lg-3 col-md-4 ms-auto">
                                <a href="cars/{{ $car->id }}/edit" class="btn btn-warning btn-sm my-1 col-6">Edit</a>
                                <form action="cars/{{ $car->id }}" class="my-1 col-6" method="POST">
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm w-100">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <img src="{{ asset($car->image) }}" alt="{{ $car->name }}" class="card-img">
                        <p class="card-text pt-3">
                            {{ $car->description }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
