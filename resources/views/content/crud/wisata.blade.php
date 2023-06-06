@extends('layouts/contentNavbarLayout')

@section('title', 'Input groups - Forms')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Input Wisata</h4>

    <div class="row">
        <!-- Basic -->
        <div class="col-md-6">
            <div class="card mb-4">
                <form action="{{ route('wisataentry') }}" method="POST">
                    @csrf
                    <h5 class="card-header">Basic</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id wisata</label>
                            <input type="text" name="id_wisata" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id atrakasi</label>
                            <select class="form-control " name="id_atraksi">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($atraksi as $items)
                                    <option value="{{ $items->id_atraksi }}">
                                        {{ $items->id_atraksi }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">objek wisata</label>
                            <input type="text" name="objek_wisata" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="defaultFormControlInput"
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
                <a href="{{ route('pdfwisata') }}" class="btn btn-primary ms-2">Cetak Data</a>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>id_wisata</th>
                        <th>id_atraksi</th>
                        <th>objek_wisata</th>
                        <th>keterangan</th>


                        <th>action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($wisata as $row)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->id_wisata }}</td>
                        <td>{{ $row->id_atraksi }}</td>
                        <td>{{ $row->objek_wisata }}</td>
                        <td>{{ $row->keterangan }}</td>



                        </tr>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button data-bs-target="#target{{ $row->id_wisata }}" type="button" data-bs-toggle="modal"
                                    class="btn btn-primary btn-sm">Edit</button>
                                <button type="button"
                                    onclick="window.location='{{ route('wisata-destroy', $row->id_wisata) }}'"
                                    class="btn btn-primary btn-sm">Delete</button>
                            </div>
                        </td>
                        </tr>
                        {{-- Modal Edit --}}
                        <div class="modal fade" id="target{{ $row->id_wisata }}" data-bs-backdrop="static"
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
                                        <form action="/crud/wisata/edit/{{ $row->id_wisata }}" method="POST">
                                            @csrf
                                            <div class="card-body demo-vertical-spacing demo-only-element">
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">id
                                                        wisata</label>
                                                    <input type="text" name="id_wisata" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->id_wisata }}" />

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">id
                                                        atrakasi</label>
                                                    <select class="form-control " name="id_atraksi">
                                                        <option class="" value="">- Silahkan Pilih -</option>
                                                        @foreach ($atraksi as $items)
                                                            <option value="{{ $items->id_atraksi }}">
                                                                {{ $items->id_atraksi }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">objek
                                                        wisata</label>
                                                    <input type="text" name="objek_wisata" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->objek_wisata }}" />

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput"
                                                        class="form-label">keterangan</label>
                                                    <input type="text" name="keterangan" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->keterangan }}" />
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
