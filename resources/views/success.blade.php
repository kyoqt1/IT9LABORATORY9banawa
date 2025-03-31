<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #a8e063, #56ab2f);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .success-icon {
            font-size: 60px;
            color: #28a745;
            animation: bounce 1.5s infinite;
        }


    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="success-card">
                    <div class="success-icon"></div>
                    <h2 class="text-success mt-3">Registration Successful!</h2>

                    @if(session('user'))
                        <p class="mt-3"><strong>Name:</strong> {{ session('user')['name'] }}</p>
                        <p><strong>Email:</strong> {{ session('user')['email'] }}</p>
                    @endif

                    <a href="{{ route('register.form') }}" class="btn btn-success mt-4 px-4">Register Another</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
