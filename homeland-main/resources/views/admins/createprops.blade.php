@extends('layouts.admins')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Create Property</h5>
                    <form method="POST" action="{{ route('admins.storeProps') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Property Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Enter property title">
                            @error('title')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" id="price" class="form-control"
                                placeholder="Enter price">
                            @error('price')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Property Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Beds -->
                        <div class="mb-3">
                            <label for="beds" class="form-label">Number of Beds</label>
                            <input type="number" name="beds" id="beds" class="form-control"
                                placeholder="Enter number of beds">
                            @error('beds')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Baths -->
                        <div class="mb-3">
                            <label for="baths" class="form-label">Number of Baths</label>
                            <input type="number" name="baths" id="baths" class="form-control"
                                placeholder="Enter number of baths">
                            @error('baths')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Square Feet -->
                        <div class="mb-3">
                            <label for="sq_ft" class="form-label">Square Feet</label>
                            <input type="number" name="sq_ft" id="sq_ft" class="form-control"
                                placeholder="Enter square feet">
                            @error('sq_ft')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Year Built -->
                        <div class="mb-3">
                            <label for="year_built" class="form-label">Year Built</label>
                            <input type="number" name="year_built" id="year_built" class="form-control"
                                placeholder="Enter year built">
                            @error('year_built')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Price Per Sq Ft -->
                        <div class="mb-3">
                            <label for="price_sqft" class="form-label">Price Per Square Foot</label>
                            <input type="number" name="price_sqft" id="price_sqft" class="form-control"
                                placeholder="Enter price per square foot">
                            @error('price_sqft')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Location -->
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" name="location" id="location" class="form-control"
                                placeholder="Enter location">
                            @error('location')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Type -->
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select name="type" id="type" class="form-select">
                                <option value="" selected>Select Type</option>
                                <option value="Buy">For Buy</option>
                                <option value="Rent">For Rent</option>
                                <option value="Lease">For Lease</option>
                            </select>
                            @error('type')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- City -->
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <select name="city" id="city" class="form-select">
                                <option value="" selected>Select City</option>
                                <option value="New York">New York</option>
                                <option value="Brooklyn">Brooklyn</option>
                                <option value="London">London</option>
                                <option value="Tokyo">Tokyo</option>
                                <option value="Cairo">Cairo</option>
                            </select>
                            @error('city')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Home Type -->
                        <div class="mb-3">
                            <label for="home_type_id" class="form-label">Home Type</label>
                            <select name="home_type_id" id="home_type_id" class="form-select">
                                <option value="" selected>Select Home Type</option>
                                <option value="1">Type 1</option>
                                <option value="2">Type 2</option>
                                <option value="3">Type 3</option>
                            </select>
                            @error('home_type_id')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- More Info -->
                        <div class="mb-3">
                            <label for="more_info" class="form-label">More Info</label>
                            <textarea name="more_info" id="more_info" class="form-control" rows="3"
                                placeholder="Enter additional information"></textarea>
                            @error('more_info')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Agent Name -->
                        <div class="mb-3">
                            <label for="agent_name" class="form-label">Agent Name</label>
                            <input type="text" name="agent_name" id="agent_name" class="form-control"
                                placeholder="Enter agent name">
                            @error('agent_name')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Create Property</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
