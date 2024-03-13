<x-app-web-layout />
<div class="container">

    <form action="{{ url('product/create') }}" method="POST">
        @csrf

        <div class="row justify-content-center">
            <div class="col-md-6">


                {{-- @if($errors->any())
                <div>
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            

                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="name">Product Name</label>
                                <textarea id="name" name="name" value="{{ old('name') }}" class="form-control" rows="3"></textarea>
                                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <input id="description" type="text" name="description" class="form-control" />
                                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="price">Product Price</label>
                                <input id="price" type="text" name="price" class="form-control" />
                                @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="stock">Stock</label>
                                <input id="stock" type="text" name="stock" class="form-control" />
                                @error('stock')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="is_active">Is Active</label>
                                <input id="is_active" type="checkbox" name="is_active"
                                    style="width: 40px,height: 30px" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>