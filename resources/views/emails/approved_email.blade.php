<!DOCTYPE html>
<html>
<head>
    <title>TQMP | Account Approval</title>
</head>
<body>
    <h1>Dear {{ $data['name'] }},</h1>

    <p>{{ $data['message'] }}</p>

    <p>Thank you for signing up with TQMP! Your account has been approved.</p>

    <p>{{ $data['message'] }}</p>
    
    <p>If you didn't create an account, please ignore this email.</p>
        
    <p>For any questions, feel free to contact our support team at <a href="mailto:support@tqmp.gissolve.com">support@tqmp.gissolve.com</a>.</p>

    <p>Best Regards</p>
    <p>TQMP Team</p>
    <a href="https://tqmp.gissolve.com/">TQMP Website</p>
</body>
</html>