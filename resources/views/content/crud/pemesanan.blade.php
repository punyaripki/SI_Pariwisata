@extends('layouts/contentNavbarLayout')

@section('title', 'Input groups - Forms')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Input Wisata</h4>

    <div class="row">
        <!-- Basic -->
        <div class="col-md-6">
            <div class="card mb-4">
                <form action="{{ route('pemesananentry') }}" method="POST">
                    @csrf
                    <h5 class="card-header">Basic</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id pememsanan</label>
                            <input type="text" name="id_pemesanan" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id hotel</label>
                            <select class="form-control " name="id_hotel">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($hotel as $items)
                                    <option value="{{ $items->id_hotel }}">{{ $items->id_hotel }}</option>
                                @endforeach

                            </select>

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">no kamar</label>
                            <select class="form-control " name="no_kamar">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($kamar as $items)
                                    <option value="{{ $items->no_kamar }}">{{ $items->no_kamar }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id jenis</label>
                            <select class="form-control " name="id_jenis">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($jenishotel as $items)
                                    <option value="{{ $items->id_jenishotel }}">{{ $items->id_jenishotel }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div>
                            <label for="defaultFormControlInput" class="form-label">waktu pemesanan</label>
                            <input type="text" name="waktu_pemesanan" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">tanggal pemesanan</label>
                            <input type="text" name="tanggal_pemesanan" class="form-control" id="defaultFormControlInput"
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
                <a href="{{ route('pdfpemesanan') }}" class="btn btn-primary ms-2">Cetak Data</a>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>id_pemesanan</th>
                        <th>id_hotel</th>
                        <th>no kamar</th>
                        <th>id type</th>

                        <th>waktu pemesanan</th>
                        <th>tanggal pemesanan</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($pemesanan as $row)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->id_pemesanan }}</td>
                        <td>{{ $row->id_hotel }}</td>
                        <td>{{ $row->no_kamar }}</td>
                        <td>{{ $row->id_jenis }}</td>

                        <td>{{ $row->waktu_pemesanan }}</td>
                        <td>{{ $row->tanggal_pemesanan }}</td>

                        </tr>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button data-bs-target="#target{{ $row->id_pemesanan }}" type="button"
                                    data-bs-toggle="modal" class="btn btn-primary btn-sm">Edit</button>
                                <button type="button"
                                    onclick="window.location='{{ route('pemesanan-destroy', $row->id_pemesanan) }}'"
                                    class="btn btn-primary btn-sm">Delete</button>
                            </div>
                        </td>
                        </tr>
                        {{-- Modal Edit --}}
                        <div class="modal fade" id="target{{ $row->id_pemesanan }}" data-bs-backdrop="static"
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
                                        <form action="/crud/pemesanan/edit/{{ $row->id_pemesanan }}" method="POST">
                                            @csrf
                                            <div class="card-body demo-vertical-spacing demo-only-element">
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">id
                                                        pememsanan</label>
                                                    <input type="text" name="id_pemesanan" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->id_pemesanan }}" />

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">id
                                                        hotel</label>
                                                    <select class="form-control " name="id_hotel">
                                                        <option class="" value="">- Silahkan Pilih -</option>
                                                        @foreach ($hotel as $items)
                                                            <option value="{{ $items->id_hotel }}">{{ $items->id_hotel }}
                                                            </option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">Name
                                                        hotel</label>
                                                    <input type="text" name="id_hotel" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->id_hotel }}" />

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">no
                                                        kamar</label>
                                                    <select class="form-control " name="no_kamar">
                                                        <option class="" value="">- Silahkan Pilih -</option>
                                                        @foreach ($kamar as $items)
                                                            <option value="{{ $items->no_kamar }}">{{ $items->no_kamar }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">id
                                                        type</label>
                                                    <select class="form-control " name="id_jenisr">
                                                        <option class="" value="">- Silahkan Pilih -</option>
                                                        @foreach ($jenishotel as $items)
                                                            <option value="{{ $items->id_jenishotel }}">
                                                                {{ $items->id_jenishotel }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">waktu
                                                        pemesanan</label>
                                                    <input type="text" name="waktu_pemesanan" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->waktu_pemesanan }}" />
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">tanggal
                                                        pemesanan</label>
                                                    <input type="text" name="tanggal_pemesanan" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->tanggal_pemesanan }}" />
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
