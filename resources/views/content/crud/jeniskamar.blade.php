@extends('layouts/contentNavbarLayout')

@section('title', 'Input groups - Forms')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Input Wisata</h4>

    <div class="row">
        <!-- Basic -->
        <div class="col-md-6">
            <div class="card mb-4">
                <form action="{{ route('jeniskamarentry') }}" method="POST">
                    @csrf
                    <h5 class="card-header">Basic</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id jenis kamar</label>
                            <input type="text" name="id_jeniskamar" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">harga</label>
                            <input type="text" name="harga" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">nama jenis</label>
                            <input type="text" name="nama_jeniskamar" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                        </div>



                        <div class="card-body">

                            <button type="submit" class="btn rounded-pill btn-primary">Add</button>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    </div>
    <div class="card">
        <h5 class="card-header">Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>id jenis kamar </th>
                        <th>harga</th>
                        <th>keterangan</th>
                        <th>nama</th>

                        <th>action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($jeniskamar as $row)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->id_jeniskamar }}</td>
                        <td>{{ $row->harga }}</td>
                        <td>{{ $row->keterangan }}</td>
                        <td>{{ $row->nama_jeniskamar }}</td>



                        </tr>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button data-bs-target="#target{{ $row->id_jeniskamar }}" type="button"
                                    data-bs-toggle="modal" class="btn btn-primary btn-sm">Edit</button>
                                <button type="button"
                                    onclick="window.location='{{ route('jeniskamar-destroy', $row->id_jeniskamar) }}'"
                                    class="btn btn-primary btn-sm">Delete</button>
                            </div>
                        </td>
                        </tr>
                        {{-- Modal Edit --}}
                        <div class="modal fade" id="target{{ $row->id_jeniskamar }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/crud/jeniskamar/edit/{{ $row->id_jeniskamar }}" method="POST">
                                            @csrf
                                            <div class="card-body demo-vertical-spacing demo-only-element">
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">id
                                                        jenis kamar</label>
                                                    <input type="text" name="id_jeniskamar" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->id_jeniskamar }}" />

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">harga
                                                    </label>
                                                    <input type="text" name="harga" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->harga }}" />

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">keterangan
                                                    </label>
                                                    <input type="text" name="keterangan" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->keterangan }}" />

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">nama
                                                    </label>
                                                    <input type="text" name="nama_jeniskamar" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->nama_jeniskamar }}" />

                                                </div>

                                                <div class="card-body">

                                                    <button type="submit"
                                                        class="btn rounded-pill btn-primary">Edit</button>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
