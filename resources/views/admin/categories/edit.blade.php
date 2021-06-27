@include('admin.header')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card p-4">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('categories.update', $category->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" placeholder="Name Here"
                                    value="{{ $category->name }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger">* Error!
                                        {{ $errors->first('name') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @include('admin.footer')
