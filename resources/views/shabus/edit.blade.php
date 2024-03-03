<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit date</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
            background-color: #5cb5f4; /* สีพื้นหลังของหน้าเว็บ */
        }
        
        .form-container {
            max-width: 500px;
            margin: auto;
            margin-top: 50px; /* ปรับระยะห่างด้านบน */
            margin-bottom: 50px; /* ปรับระยะห่างด้านล่าง */
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
            margin-bottom: 20px; /* ปรับระยะห่างด้านล่างของคำว่า Name */
        }

        .form-input {
            margin-bottom: 20px; /* ปรับระยะห่างด้านล่างของช่องกรอกข้อมูล */
        }

        .form-separator {
            margin-top: 30px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-container">
                    <form action="{{ route('shabus.update',$shabu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <label class="form-label">Edit Member</label>
                            </div>
                        </div>
                        <div class="form-group row form-input">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Name</label> <!-- ใส่คลาส form-label เพื่อทำให้ข้อความ Name ใหญ่ขึ้น -->
                                    <input type="text" name="name" value="{{ $shabu->name }}" class="form-control" id="name" placeholder="Shabu Name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>   
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row form-input">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{ $shabu->email }}" class="form-control" id="email" placeholder="Shabu Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>   
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row form-input">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" value="{{ $shabu->phone }}" class="form-control" id="phone" placeholder="Shabu Phone">
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
