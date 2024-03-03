<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>What page Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
            background-color: #5cb5f4; /* สีพื้นหลังของหน้าเว็บ */
        }
        .create-button {
            margin-top: 40px; /* ปรับระยะห่างด้านบน */
        }
        .table {
            margin-top: 40px; /* ปรับระยะห่างของตารางด้านบน */
        }
        .page-heading {
            margin-top: 40px; /* ปรับระยะห่างด้านบนของหัวเรื่อง */
            margin-bottom: 20px; /* ปรับระยะห่างด้านล่างของหัวเรื่อง */
        }
    </style>
</head>
<body>
    
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center mb-4 page-heading">Member</h1> <!-- ใส่คลาส page-heading -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="create-button">
                    <a href="{{ route('shabus.create') }}" class="btn btn-success">Creata Shabu</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table table-bordered mt-4">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($shabus as $shabu)
                <tr>
                    <td>{{ $shabu->id }} </td>
                    <td>{{ $shabu->name }} </td>
                    <td>{{ $shabu->email }} </td>
                    <td>{{ $shabu->phone }} </td>
                    <td>
                        <form action="{{ route('shabus.destroy', $shabu->id) }}" method="POST">
                            <a href="{{ route('shabus.edit', $shabu->id) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>   
        {!! $shabus->links('pagination::bootstrap-5') !!}
    </div>
</body>
</html>
