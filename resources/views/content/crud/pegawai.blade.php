@extends('layouts/contentNavbarLayout')

@section('title', 'Input groups - Forms')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Input Pegawai</h4>

    <div class="row">
        <div class="card mb-4">
            <form action="{{ route('pegawaientry') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3 row">
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id
                                pegawaia</label>
                            <input type="text" name="id_pegawai" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id_hotel</label>
                            <select class="form-control " name="id_hotel">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($hotel as $items)
                                    <option value="{{ $items->id_hotel }}">{{ $items->id_hotel }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">nama</label>
                            <input type="text" name="nama" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">email</label>
                            <input type="text" name="email" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">password</label>
                            <input type="password" name="password" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">no_hp</label>
                            <input type="text" name="no_hp" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">jenis kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />
                        </div>



                        <div class="card-body">

                            <button type="submit" class="btn rounded-pill btn-primary">Add</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    </div>
    <div class="card">
        <h5 class="card-header">Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <a href="{{ route('pdfpegawai') }}" class="btn btn-primary ms-2">Cetak Data</a>
                <thead>
                    <tr>
                        <th>id pegawai</th>
                        <th>id hotel</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>password</th>
                        <th>no hp</th>
                        <th>jenis kelamin</th>
                        <th>aksi</th>


                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($pegawai as $row)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->id_pegawai }}</td>
                        <td>{{ $row->id_hotel }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->password }}</td>
                        <td>{{ $row->no_hp }}</td>
                        <td>{{ $row->jenis_kelamin }}</td>
                        <td>{{ $row->email_admin }}</td>

                        </tr>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button data-bs-target="#target{{ $row->id_pegawai }}" type="button"
                                    data-bs-toggle="modal" class="btn btn-primary btn-sm">Edit</button>
                                <button type="button"
                                    onclick="window.location='{{ route('pegawai-destroy', $row->id_pegawai) }}'"
                                    class="btn btn-primary btn-sm">Delete</button>
                            </div>
                        </td>
                        </tr>
                        {{-- Modal Edit --}}
                        <div class="modal fade" id="target{{ $row->id_pegawai }}" data-bs-backdrop="static"
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
                                        <form action="/crud/pegawai/edit/{{ $row->id_pegawai }}" method="POST">
                                            @csrf
                                            <div class="card-body demo-vertical-spacing demo-only-element">
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">id
                                                        pegawaia</label>
                                                    <input type="text" name="id_pegawai" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->id_pegawai }}" />

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">id_hotel
                                                    </label>
                                                    <select class="form-control " name="id_hotel">
                                                        <option class="" value="">- Silahkan Pilih -</option>
                                                        @foreach ($hotel as $items)
                                                            <option value="{{ $items->id_hotel }}">{{ $items->id_hotel }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">nama</label>
                                                    <input type="text" name="nama" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->nama }}" />
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">email</label>
                                                    <input type="text" name="email" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->email }}" />
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput"
                                                        class="form-label">password</label>
                                                    <input type="text" name="password" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->password }}" />
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">no_hp</label>
                                                    <input type="text" name="no_hp" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->no_hp }}" />
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">jenis
                                                        kelamin</label>
                                                    <input type="text" name="jenis_kelamin" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->jenis_kelamin }}" />
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
