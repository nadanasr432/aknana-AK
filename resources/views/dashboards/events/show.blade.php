@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Events')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('dashboard.event.create') }}" class="btn btn-gradient-primary me-2">
                            @lang('file.Create Event')</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span> @lang('file.All Events') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title"> @lang('file.Events Table')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>@lang('file.Title (English)')</th>
                                    <th>@lang('file.Title (Arabic)')</th>
                                    <th>@lang('file.Text (English)')</th>
                                    <th> @lang('file.Text (Arabic)')</th>
                                    <th>@lang('file.Event Image')</th>
                                    <th>@lang('file.Status')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{ $event->getTranslation('title', 'en') }}</td>
                                        <td>{{ $event->getTranslation('title', 'ar') }}</td>
                                        <td>{{ $event->getTranslation('text', 'en') }}</td>
                                        <td>{{ $event->getTranslation('text', 'ar') }}</td>
                                        <td><img src="{{ asset('storage/' . $event->media()->first()->file_path) }}"></td>
<td>
                                            <form class="status-form1" data-event-id="{{ $event->id }}">
                                                @csrf
                                                @method('PUT')
                                                <select class="status-select1">

                                                    <option value="approved"
                                                        {{ $event->status == 'approved' ? 'selected' : '' }}>Approved
                                                    </option>
                                                    <option value="pending"
                                                        {{ $event->status == 'pending' ? 'selected' : '' }}>Pending
                                                    </option>
                                                </select>
                                            </form>

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard.event.edit', $event->id) }}">@lang('file.Edit')</a>
                                                    <form id="deleteForm" method="POST"
                                                        action="{{ route('dashboard.event.delete', ['id' => $event->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <!-- Use JavaScript to show a confirmation message -->
                                                        <button type="submit" class="dropdown-item"
                                                            onclick="confirmDelete()">@lang('file.Delete')</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            var isConfirmed = confirm("Are you sure you want to delete this event?");
            if (isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
    <script>
    // Assuming you're using jQuery
    $(document).ready(function() {
        $('.status-form1').on('change', '.status-select1', function() {
            var form = $(this).closest('form');
            var eventId = form.data('event-id');
            var status = $(this).val();

            $.ajax({
                url: "{{ route('dashboard.events.updateStatus', ':id') }}".replace(':id', eventId),
                method: 'PUT',
                data: {
                    _token: "{{ csrf_token() }}",
                    status: status
                },
                success: function(response) {
                    // Handle success response, if needed
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle error response, if needed
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

@endsection
