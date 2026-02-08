<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <style>
        :root {
            --bg: #f5f7fb;
            --card: #ffffff;
            --text: #111827;
            --muted: #6b7280;
            --primary: #2563eb;
            --border: #e5e7eb;
            --radius: 14px;
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
            max-width: 640px;
            margin: 70px auto;
            padding: 0 20px;
        }

        .card {
            background: var(--card);
            border-radius: var(--radius);
            box-shadow: 0 20px 40px rgba(0,0,0,0.06);
            overflow: hidden;
        }

        .profile-header {
            background: linear-gradient(135deg, #1f2937, #111827);
            color: #fff;
            padding: 35px 25px;
            text-align: center;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: 600;
            margin: 0 auto 12px;
        }

        .profile-header h2 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
        }

        .profile-header p {
            margin: 6px 0 0;
            font-size: 13px;
            color: #d1d5db;
        }

        .content {
            padding: 25px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 0;
            border-bottom: 1px solid var(--border);
        }

        .row:last-child {
            border-bottom: none;
        }

        .label {
            font-size: 13px;
            font-weight: 600;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .value {
            font-size: 14px;
            font-weight: 500;
            color: var(--text);
        }

        .footer {
            padding: 20px;
            text-align: center;
            background: #f9fafb;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 22px;
            background: var(--primary);
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">

        <div class="profile-header">
            <div class="avatar">
                {{ strtoupper(substr($singleData->name, 0, 1)) }}
            </div>
            <h2>{{ $singleData->name }}</h2>
            <p>User Profile</p>
        </div>

        <div class="content">
            <div class="row">
                <div class="label">Email</div>
                <div class="value">{{ $singleData->email }}</div>
            </div>

            <div class="row">
                <div class="label">Age</div>
                <div class="value">{{ $singleData->age }}</div>
            </div>

            <div class="row">
                <div class="label">City</div>
                <div class="value">{{ $singleData->city }}</div>
            </div>
        </div>

        <div class="footer">
            <a href="{{ url('/') }}" class="btn">
                ⬅ Back to Users
            </a>
        </div>

    </div>
</div>

</body>
</html>
