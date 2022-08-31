@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                invoice pdf
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" target="_blank" href="{{route('invoice.pdf',['type'=>'stream'])}}">view</a></li>
                                <li><a class="dropdown-item" target="_blank" href="{{route('invoice.pdf',['type'=>'download'])}}">Download</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <main>
                        <div class="">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>

                                </tbody>
                              </table>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
