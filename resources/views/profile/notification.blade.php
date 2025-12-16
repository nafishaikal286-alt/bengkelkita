<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Notifikasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            background: #f2f2f2;
            color: #222;
        }

        /* PAGE WRAPPER */
        .page {
            max-width: 980px;
            margin: 50px auto;
            padding: 40px;
            background: rgba(255,255,255,0.85);
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            position: relative;
            overflow: hidden;
        }

        /* WATERMARK LOGO */
        .page::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url("{{ asset('assets/img/bengkelkita-logo.png') }}") no-repeat center;
            background-size: 520px;
            opacity: 0.06;
            pointer-events: none;
        }

        /* HEADER */
        .header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 35px;
            position: relative;
        }

        .back-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #111;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
        }

        /* SECTION */
        .section {
            margin-bottom: 35px;
            position: relative;
        }

        .section h3 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 18px;
            color: #333;
        }

        /* ROW */
        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 0;
            border-bottom: 1px solid #e6e6e6;
        }

        .row:last-child {
            border-bottom: none;
        }

        .row span {
            font-size: 14px;
        }

        /* TOGGLE */
        .switch {
            position: relative;
            width: 46px;
            height: 26px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            inset: 0;
            background: #ccc;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.3s;
        }

        .slider::before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            left: 3px;
            top: 3px;
            background: white;
            border-radius: 50%;
            transition: 0.3s;
        }

        .switch input:checked + .slider {
            background: #2563eb;
        }

        .switch input:checked + .slider::before {
            transform: translateX(20px);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .page {
                margin: 20px;
                padding: 25px;
            }
        }
    </style>
</head>
<body>

<div class="page">

    <!-- HEADER -->
    <div class="header">
        <div class="back-btn" onclick="history.back()">←</div>
        <h1>Notifikasi</h1>
    </div>

    <!-- COMMON -->
    <div class="section">
        <h3>Common</h3>

        <div class="row">
            <span>General Notification</span>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
            </label>
        </div>

        <div class="row">
            <span>Sound</span>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>

        <div class="row">
            <span>Vibrate</span>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
            </label>
        </div>
    </div>

    <!-- SYSTEM -->
    <div class="section">
        <h3>System & Services Update</h3>

        <div class="row">
            <span>App Update</span>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
            </label>
        </div>

        <div class="row">
            <span>Bill Reminder</span>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
            </label>
        </div>

        <div class="row">
            <span>Promotion</span>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
            </label>
        </div>

        <div class="row">
            <span>Discount Available</span>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>

        <div class="row">
            <span>Payment Request</span>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>
    </div>

    <!-- OTHERS -->
    <div class="section">
        <h3>Others</h3>

        <div class="row">
            <span>New Service Available</span>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>

        <div class="row">
            <span>New Tips Available</span>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
            </label>
        </div>
    </div>

</div>

</body>
</html>
