@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Bienvenue Admin {{ Auth::user()->name }}</h1>
        </div>

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{ Auth::user()->name }}</td>
                <td>{{ Auth::user()->email }}</td>
              </tr>
            </tbody>
          </table>
    </div>
    <a href="{{url('/')}}" class="btn btn-primary">Visiter le site</a>
@endsection
