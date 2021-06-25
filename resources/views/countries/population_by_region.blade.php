@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    @foreach ($data as $region => $population)
                        <td>{{ $region }}</td>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $population) 
                    <td>
                        {{ $population }}
                    </td>
                @endforeach
            </tbody>
        </table>
        </div> 
    </div>
@endsection