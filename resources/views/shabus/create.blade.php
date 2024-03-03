<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create date</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        .form-container {
            max-width: 500px;
            margin: auto;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            font-size: 24px; /* ปรับขนาดตัวอักษรใหญ่ขึ้น */
            font-weight: bold; /* ทำให้ตัวอักษรหนาขึ้น */
        }

        .form-separator {
            margin-top: 30px;
            margin-bottom: 20px;
        }
        body {
            background-color: #5cb5f4; /* สีพื้นหลังของหน้าเว็บ */
        }
    </style>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-container">
                    <form action="{{ route('shabus.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <label class="form-label">Apply for membership</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Shabu Name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>   
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Shabu Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>   
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Shabu Phone">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>   
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row form-separator">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
