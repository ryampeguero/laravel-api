@extends('layouts.admin')

@section('content')
    @if ($type)
        @dd($type)
    @endif
    <div class="container">
        <h1>Types</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>icon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>
                        <td class="d-flex gap-3">
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                value="{{ $type->id }}" name="id">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <form action="{{ route('admin.types.destroy', ['type' => $type->id]) }}" method="POST"
                                id="delete-form">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if ($type)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('admin.types.update', ['type' => $type->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    <div class="modal-content p-3">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $type->name) }}">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Modifica</button>
                        </div>
                </form>
            </div>
        </div>
    @endisset
@endsection
