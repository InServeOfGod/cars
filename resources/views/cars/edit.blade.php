@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="col-md-8 mx-auto my-5">
            <form action="/cars" method="post">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-sm-3 col-md-2">
                        <label for="name">Car Name : </label>
                    </div>

                    <div class="col-sm-9 col-md-10">
                        <input id="name" name="name" class="form-control" type="text" value="{{ $car->name ?? '' }}" placeholder="Enter name of the car here">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3 col-md-2">
                        <label for="founded">Founded : </label>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <input id="founded" name="founded" class="form-control" type="number" min="1900" max="{{ date("Y") }}" value="{{ $car->founded ?? 2000 }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3 col-md-2">
                        <label for="image">Image : </label>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <input id="image" name="image" class="form-control" type="text" value="{{ $car->image ?? '' }}" placeholder="Enter path of image of the car">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3 col-md-2">
                        <label for="description">Description : </label>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <input type="text" class="form-control" id="description" name="description" value="{{ $car->description ?? '' }}" placeholder="Enter description here">
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-sm ms-auto d-block">Submit</button>
            </form>
        </div>
    </div>
@endsection

