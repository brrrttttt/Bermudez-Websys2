<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
</head>
<body>
    <h1>Personal Information Form</h1>
<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action = "/output" method="POST" class="p-4 border rounded bg-light">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="first_name" class="form-label">First Name</label>
                <div class="d-flex align-items-center">
                    <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" required>
                    @error('first_name') <small class="text-danger ms-2">{{ $message }}</small> @enderror
                </div>
            </div><br>

            <div class="col-md-6">
                <label for="last_name" class="form-label">Last Name</label>
                <div class="d-flex align-items-center">
                    <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" required>
                    @error('last_name') <small class="text-danger ms-2">{{ $message }}</small> @enderror
                </div>
            </div>
        </div><br>

        <div class="mb-3">
            <label class="form-label">Sex</label>
            <div class="d-flex align-items-center">
                <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="sex" value="Male" required>
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="sex" value="Female" required>
                    <label class="form-check-label">Female</label>
                </div>
                @error('sex') <small class="text-danger ms-2">{{ $message }}</small> @enderror
            </div>
        </div><br>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="mobile_phone" class="form-label">Mobile Phone</label>
                <div class="d-flex align-items-center">
                    <input type="text" id="mobile_phone" name="mobile_phone" class="form-control @error('mobile_phone') is-invalid @enderror" placeholder="0998-XXX-XXX" required>
                    @error('mobile_phone') <small class="text-danger ms-2">{{ $message }}</small> @enderror
                </div><br>

            </div>
            <div class="col-md-6">
                <label for="tel_no" class="form-label">Telephone No.</label>
                <div class="d-flex align-items-center">
                    <input type="text" id="tel_no" name="tel_no" class="form-control @error('tel_no') is-invalid @enderror">
                    @error('tel_no') <small class="text-danger ms-2">{{ $message }}</small> @enderror
                </div>
            </div>
        </div><br>

        <div class="mb-3">
            <label for="birth_date" class="form-label">Birth Date</label>
            <div class="d-flex align-items-center">
                <input type="date" id="birth_date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" required>
                @error('birth_date') <small class="text-danger ms-2">{{ $message }}</small> @enderror
            </div>
        </div><br>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <div class="d-flex align-items-center">
                <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" required>
                @error('address') <small class="text-danger ms-2">{{ $message }}</small> @enderror
            </div>
        </div><br>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <div class="d-flex align-items-center">
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
                    @error('email') <small class="text-danger ms-2">{{ $message }}</small> @enderror
                </div>
            </div><br>

            <div class="col-md-6">
                <label for="website" class="form-label">Website</label>
                <div class="d-flex align-items-center">
                    <input type="url" id="website" name="website" class="form-control @error('website') is-invalid @enderror">
                    @error('website') <small class="text-danger ms-2">{{ $message }}</small> @enderror
                </div>
            </div>
        </div><br>

        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>

</body>
</html>