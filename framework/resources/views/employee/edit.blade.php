<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-pencil-square fs-1"></i>
                    <h4>Edit Karyawan</h4>
                </div>
                <hr>
                <form action="{{ route('employees.update', $employee->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" id="firstName" name="firstname" value="{{ $employee->firstname }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="lastName" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" id="lastName" name="lastname" value="{{ $employee->lastname }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="age" class="form-label">Usia</label>
                            <input type="number" class="form-control" id="age" name="age" value="{{ $employee->age }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="position" class="form-label">Posisi</label>
                            <select class="form-control" id="position" name="position_id">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}" {{ $employee->position_id == $position->id ? 'selected' : '' }}>{{ $position->code }} - {{ $position->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 d-grid mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>