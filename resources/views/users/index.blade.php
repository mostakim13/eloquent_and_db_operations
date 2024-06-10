<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>User List</h1>
    <div class="mb-3 text-right">
        <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
    </div>
    @if ($users->isEmpty())
        <p>No active users found.</p>
    @else
        <table class="table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-info">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>

<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
