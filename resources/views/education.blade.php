@extends('layouts.app')

@section('content')
    <style>
    .custom-header th {
        background-color: #EC407A !important;
        color: white !important;
        border: none !important;
    }
    
    .table {
        border-radius: 15px;
        overflow: hidden;
    }
</style>

    <h1 class="mb-4" style="color: #455A64;">Education History</h1>

    <div class="table-responsive">
        <table class="table table-striped table-hover border shadow-sm">
            <thead>
                <tr class="custom-header">
                    <th class="py-3">School</th>
                    <th class="py-3">Degree</th>
                    <th class="py-3">Start Year</th>
                    <th class="py-3">End Year</th>
                </tr>
            </thead>
            <tbody style="background-color: white;">
                @foreach ($educations as $edu)
                    <tr>
                        <td class="py-3">{{ $edu->school_name }}</td>
                        <td class="py-3">{{ $edu->degree }}</td>
                        <td class="py-3">{{ $edu->start_year }}</td>
                        <td class="py-3">{{ $edu->end_year ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection