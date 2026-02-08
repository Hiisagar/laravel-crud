<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>

    <style>
        :root {
            --bg: #f5f7fb;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --primary: #2563eb;
            --success: #16a34a;
            --border: #e5e7eb;
            --radius: 10px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont;
            background: var(--bg);
            color: var(--text);
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .card {
            background: var(--card);
            border-radius: var(--radius);
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            padding: 25px;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 600;
        }

        .header p {
            margin-top: 6px;
            font-size: 14px;
            color: var(--muted);
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 6px;
            color: var(--muted);
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 8px;
            border: 1px solid var(--border);
            font-size: 14px;
            outline: none;
            transition: border 0.2s ease;
        }

        input:focus {
            border-color: var(--primary);
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
        }

        .btn {
            padding: 10px 18px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .btn-back {
            background: #f3f4f6;
            color: #374151;
        }

        .btn-back:hover {
            background: #e5e7eb;
        }

        .btn-save {
            background: var(--success);
            color: #fff;
        }

        .btn-save:hover {
            background: #15803d;
        }

        footer {
            margin-top: 18px;
            text-align: center;
            font-size: 12px;
            color: var(--muted);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">

        <div class="header">
            <h1>✏️ Add New User</h1>
            <p>Update user information below</p>
        </div>

        <form action="{{ route('user.update',$data->id ) }}" method="post">
            @csrf
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter full name" value="{{ $data->name }}" autocomplete="name">
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="number" name="age" placeholder="Enter age" value="{{ $data->age }}" autocomplete="age">
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter email" value="{{ $data->email }}" autocomplete="email">
            </div>

            <div class="form-group">
                <label>City</label>
                <input type="text" name="city" placeholder="Enter city" value="{{ $data->city }}" autocomplete="city">
            </div>

            <div class="actions">
                <a href="#" class="btn btn-back">← Back</a>
                <button type="submit" class="btn btn-save">Update User</button>
            </div>
        </form>

        <footer>
            © {{ date('Y') }} User Management System
        </footer>

    </div>
</div>

</body>
</html>
