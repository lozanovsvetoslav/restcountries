@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    @foreach ($data as $region => $countries)
                        <tr>
                            <td>
                                {{ $region }}
                            </td>
                            <td>
                                @foreach ($countries as $country)
                                    {{ $country }}
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
@endsection