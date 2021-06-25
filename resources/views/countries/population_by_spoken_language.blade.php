@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <td>Language</td>
                        <td>Population</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $language => $population)
                        <tr>
                            <td>
                                {{ $language }}
                            </td>
                            <td>
                                {{ $population }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
@endsection