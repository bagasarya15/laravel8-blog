@extends('dashboard.layouts.main')

@section('container')
    <div class="container mx-3 my-3">
        <h1 class=" h5 text-danger" style="font-family: poppins;">{{ $title }}</h1>
        <hr>
        {{-- Alert Success Tambah Post --}}
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('success') }}
            </div>
        @endif
        {{-- End Alert --}}
        <a href="/dashboard/categories/create" class="btn btn-sm btn-primary"> <i class="fas fa-plus-square"></i> Create
            Category</a>
        <div class="table-responsive col-lg">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $category->name }}</td>
                            <td>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-primary"> <i
                                            class="fas fa-eye"></i></a>
                                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-success my-1">
                                        <i class="fas fa-edit"></i></a>
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Yakin ingin menghapus postingan ini ?')"> <i
                                            class="fas fa-trash">
                                        </i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
