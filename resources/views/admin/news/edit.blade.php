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
                    <form action="{{ route('news.update', $news->id) }}" method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" name="user_id" value="1">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" value="{{ $news->title }}">
                                @if ($errors->has('title'))
                                    <p class="text-danger">* Error!
                                        {{ $errors->first('title') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea name="description" id="" cols="30" rows="2"
                                    class="form-control">{{ $news->description }}</textarea>
                                @if ($errors->has('description'))
                                    <p class="text-danger">* Error!
                                        {{ $errors->first('description') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Content</label>
                            <div class="col-sm-9">
                                <textarea name="content" id="" cols="30" rows="5"
                                    class="form-control">{{ $news->content }}</textarea>
                                @if ($errors->has('content'))
                                    <p class="text-danger">* Error!
                                        {{ $errors->first('content') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-right control-label col-form-label">Thumbnail</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="thumbnail"
                                    value="{{ $news->thumbnail }}">
                                @if ($errors->has('thumbnail'))
                                    <p class="text-danger">* Error!
                                        {{ $errors->first('thumbnail') }}
                                    </p>
                                @endif
                            </div>
                            <div class="col-md-2">
                                <img src="{{ $news->thumbnail }}" width="100%" height="50vh" alt="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Kind Of
                                News</label>
                            <div class="col-sm-9">
                                <select name="kindofnews_id" class="form-control" id="">
                                    @foreach ($kindOfNewsList as $kindOfNews)
                                        <option value="{{ $kindOfNews->id }}" @if ($kindOfNews->id == $news->kindofnews_id) {{ 'selected' }} @endif>
                                            {{ $kindOfNews->name }}
                                        </option>
                                    @endforeach
                                </select>
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
