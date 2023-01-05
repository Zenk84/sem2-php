@extends('admin.templates.default')

@section('content-sub')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User List</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <form action="{{ route('admin.users.list') }}" method="get">
                    <input type="search" name="search" value="{{ $search }}">
                    <button type="submit" class="btn btn-sm btn-outline-secondary">Search</button>
                    {{--                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>--}}
                </form>
            </div>
            {{--<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>--}}
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y H:m:s') }}</td>
                    <td>
                        <input type="button" value="View"/>
                        <input type="button" value="Edit"/>
                        <input type="button" value="Delete"/>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">-- No data --</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection
