@extends('layouts/user-app')
@section('title', $data['page_title'])
@section('title', 'Survey Kepuasan Mahasiswa')
@section('content')
    <x-navbar></x-navbar>
    <div class="align-items-center m-5">
        <div class="card p-5 m-4">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Comment & Suggestion
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Rating<i class="bi bi-star-fill text-success mx-2"></i>
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Kategori
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    @if($data['reports'] != null)
                        @foreach($data['reports'] as $report)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $report->name }}</h6>
                                            <p class="text-xs text-secondary mb-0">{{ $report->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $report->comment }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-xs font-weight-bold mb-0">{{ $report->rating . '/5' }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $report->kategori }}</span>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
