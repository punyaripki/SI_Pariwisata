@extends('layouts/contentNavbarLayout')

@section('title', 'Input groups - Forms')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Input user</h4>

    <div class="row">
        <div class="card mb-4">
            <form action="{{ route('adminentry') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3 row">
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id
                                admin</label>
                            <input type="text" name="id_admin" class="form-control" id="defaultFormControlInput"
                                placeholder="" aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id_pemesanan </label>
                            <select class="form-control " name="id_pemesanan">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($pemesanan as $items)
                                    <option value="{{ $items->id_pemesanan }}">{{ $items->id_pemesanan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id_pegawai</label>
                            <select class="form-control " name="id_pegawai">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($pegawai as $items)
                                    <option value="{{ $items->id_pegawai }}">{{ $items->id_pegawai }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id_penilaian</label>
                            <select class="form-control " name="id_penilaian">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($penilaian as $items)
                                    <option value="{{ $items->id_penilaian }}">{{ $items->id_penilaian }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">id_wisata</label>
                            <select class="form-control " name="id_wisata">
                                <option class="" value="">- Silahkan Pilih -</option>
                                @foreach ($wisata as $items)
                                    <option value="{{ $items->id_wisata }}">{{ $items->id_wisata }}</option>
                                @endforeach

                            </select>

                            <div>
                                <label for="defaultFormControlInput" class="form-label">nama_admin</label>
                                <input type="text" name="nama_admin" class="form-control" id="defaultFormControlInput"
                                    placeholder="" aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div>
                                <label for="defaultFormControlInput" class="form-label">email admin
                                </label>
                                <input type="text" name="email_admin" class="form-control" id="defaultFormControlInput"
                                    placeholder="" aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div>
                                <label for="defaultFormControlInput" class="form-label">password
                                </label>
                                <input type="password" name="password_admin" class="form-control"
                                    id="defaultFormControlInput" placeholder="" aria-describedby="defaultFormControlHelp" />
                            </div>


                            <div class="card-body">

                                <button type="submit" class="btn rounded-pill btn-primary">Add</button>

                            </div>
            </form>
        </div>
    </div>


    </div>
    <div class="card">
        <h5 class="card-header">Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <a href="{{ route('pdfadmin') }}" class="btn btn-primary ms-2">Cetak Data</a>
                <thead>
                    <tr>
                        <th>id admin</th>
                        <th>id pemesanan</th>
                        <th>id pegawai</th>
                        <th>id penilaian</th>
                        <th>id wisata</th>

                        <th>Nama</th>
                        <th>Email</th>

                        <th>Password</th>
                        <th>action</th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($admin as $row)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->id_admin }}</td>
                        <td>{{ $row->id_pemesanan }}</td>
                        <td>{{ $row->id_pegawai }}</td>
                        <td>{{ $row->id_penilaian }}</td>
                        <td>{{ $row->id_wisata }}</td>

                        <td>{{ $row->nama_admin }}</td>
                        <td>{{ $row->email_admin }}</td>
                        <td>{{ $row->password_admin }}</td>
                        </tr>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button data-bs-target="#target{{ $row->id_admin }}" type="button" data-bs-toggle="modal"
                                    class="btn btn-primary btn-sm">Edit</button>
                                <button type="button"
                                    onclick="window.location='{{ route('admin-destroy', $row->id_admin) }}'"
                                    class="btn btn-primary btn-sm">Delete</button>
                            </div>
                        </td>
                        </tr>
                        {{-- Modal Edit --}}
                        <div class="modal fade" id="target{{ $row->id_admin }}" data-bs-backdrop="static"
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
                                        <form action="/crud/admin/edit/{{ $row->id_admin }}" method="POST">
                                            @csrf
                                            <div class="card-body demo-vertical-spacing demo-only-element">
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">id
                                                        admin</label>
                                                    <input type="text" name="id_admin" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->id_admin }}" />

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">id_pemesanan
                                                    </label>
                                                    <select class="form-control " name="id_pemesanan">
                                                        <option class="" value="">- Silahkan Pilih -</option>
                                                        @foreach ($pemesanan as $items)
                                                            <option value="{{ $items->id_pemesanan }}">
                                                                {{ $items->id_pemesanan }}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput"
                                                        class="form-label">id_pegawai</label>
                                                    <select class="form-control " name="id_pegawai">
                                                        <option class="" value="">- Silahkan Pilih -</option>
                                                        @foreach ($pegawai as $items)
                                                            <option value="{{ $items->id_pegawai }}">
                                                                {{ $items->id_pegawai }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput"
                                                        class="form-label">id_penilaian</label>
                                                    <select class="form-control " name="id_penilaian">
                                                        <option class="" value="">- Silahkan Pilih -</option>
                                                        @foreach ($penilaian as $items)
                                                            <option value="{{ $items->id_penilaian }}">
                                                                {{ $items->id_penilaian }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput"
                                                        class="form-label">id_wisata</label>
                                                    <select class="form-control " name="id_wisata">
                                                        <option class="" value="">- Silahkan Pilih -</option>
                                                        @foreach ($wisata as $items)
                                                            <option value="{{ $items->id_wisata }}">
                                                                {{ $items->id_wisata }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                                <div>
                                                    <label for="defaultFormControlInput"
                                                        class="form-label">nama_admin</label>
                                                    <input type="text" name="nama_admin" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->nama_admin }}" />
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">email admin
                                                    </label>
                                                    <input type="text" name="email_admin" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->email_admin }} " />
                                                </div>
                                                <div>
                                                    <label for="defaultFormControlInput" class="form-label">password
                                                    </label>
                                                    <input type="text" name="password_admin" class="form-control"
                                                        id="defaultFormControlInput" placeholder=""
                                                        aria-describedby="defaultFormControlHelp"
                                                        value="{{ $row->password_admin }} " />
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
