@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista czasopisma</div>

                <div class="card-body">

                    <form action="{{ route('home') }}">
                        <div class="container">
                            <div class="row">
                                <input class="form control form-control-sm" type="search" name="mag_filtr" value="{{ $request['mag_filtr'] }}" placeholder="id/tytuł">
                                <select class="mdb-select md-form" name="pub_filtr">               
                                    <option value="">--Wybierz magazyn--</option>
                                    @foreach(json_decode($publishers, true) as $item)
                                    <option value="{{ $item['id'] }}" @if($item['id'] == $request['pub_filtr']) selected @endif >{{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                                <div class="col-md-2 col-3">
                                    <button type="submit" class="w-100 btn btn-sm bg-blue-dark">filtruj</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <br>                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">Tytuł</th>
                            <th scope="col">Nazwa wydawcy</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($magazines as $item)
                          <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->publisher_name }}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
{!! $magazines->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
