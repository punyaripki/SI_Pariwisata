@extends('layouts/contentNavbarLayout')

@section('title', 'Input groups - Forms')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Input Wisata</h4>

    <div class="row">
        <!-- Basic -->
        <div class="col-md-6">
            <div class="card mb-4">
                <form action="{{ route('kamarentry') }}" method="POST">
                    @csrf
                    <h5 class="card-header">Basic</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div>
                            <label for="defaultFormControlInput" class="form-label">no kamar</label>
                            <input type="text" name="no_kamar" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id jenis kamar</label>
                            <select class="form-control " name="id_jenis">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($jeniskamar as $items)
                                    <option value="{{ $items->id_jeniskamar }}">
                                        {{ $items->id_jeniskamar }}</option>
                                @endforeach

                            </select>

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                            </select>
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
                        <th>no_kamar</th>
                        <th>id_jeniskamar</th>
                        <th>keterangan</th>


                        <th>action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($kamar as $row)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->no_kamar }}</td>
                        <td>{{ $row->id_jenis }}</td>
                        <td>{{ $row->keterangan }}</td>



                        </tr>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button data-bs-target="#target{{ $row->no_kamar }}" type="button" data-bs-toggle="modal"
                                    class="btn btn-primary btn-sm">Edit</button>
                                <button type="button"
                                    onclick="window.location='{{ route('kamar-destroy', $row->no_kamar) }}'"
                                    class="btn btn-primary btn-sm">Delete</button>
                            </div>
                        </td>
                        </tr>
                        {{-- Modal Edit --}}
                        <div class="modal fade" id="target{{ $row->no_kamar }}" data-bs-backdrop="static"
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
                                        <form action="/crud/kamar/edit/{{ $row->no_kamar }}" method="POST">
                                            @csrf
                                            <div class="card-body demo-vertical-spacing demo-only-element">
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">no
                                                        kamar</label>
                                                    <input type="text" name="no_kamar" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->no_kamar }}" />

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">
                                                        keterangan</label>
                                                    <input type="text" name="keterangan" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->keterangan }}" />

                                                    <label for="defaultFormControlInput" class="form-label">id
                                                        hotel</label>
                                                    <select class="form-control " name="id_hotel">
                                                        <option class="" value="">- Silahkan Pilih -
                                                        </option>
                                                        @foreach ($hotel as $items)
                                                            <option value="{{ $items->id_hotel }}">
                                                                {{ $items->id_hotel }}
                                                            </option>
                                                        @endforeach

                                                    </select>


                                                    <div class="card-body">

                                                        <button type="submit"
                                                            class="btn rounded-pill btn-primary">Edit</button>

                                                    </div>

                                                    </>
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
