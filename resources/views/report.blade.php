@extends('layouts/user-app')
@section('title', 'Survey Kepuasan Mahasiswa')
@section('content')

<div class="container mt-5">
    <h2 class="text-center">Your Reports</h2>
    
    <!-- Jika ada pesan kesalahan atau sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Cek apakah ada laporan -->
    @if($reports->isEmpty())
        <div class="alert alert-info">
            <p>No reports available at the moment.</p>
        </div>
    @else
        <!-- Tabel untuk menampilkan laporan -->
        <table class="table table-striped table-hover mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Report Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $report->title }}</td>
                    <td>{{ \Carbon\Carbon::parse($report->created_at)->format('d M Y') }}</td>
                    <td>
                        @if($report->status == 'completed')
                            <span class="badge badge-success">Completed</span>
                        @elseif($report->status == 'pending')
                            <span class="badge badge-warning">Pending</span>
                        @else
                            <span class="badge badge-danger">Failed</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('report.show', $report->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('report.download', $report->id) }}" class="btn btn-primary btn-sm">Download</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination links -->
        <div class="d-flex justify-content-center">
            {{ $reports->links() }}
        </div>
    @endif
</div>

@endsection
