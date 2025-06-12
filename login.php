<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
    }
    .result-box {
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
    }
    .success {
      background-color: #dff0d8;
      color: #3c763d;
      border: 1px solid #d6e9c6;
    }
    .error {
      background-color: #f2dede;
      color: #a94442;
      border: 1px solid #ebccd1;
    }
    .back-btn {
      display: inline-block;
      padding: 10px 15px;
      background-color: #337ab7;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }
    .back-btn:hover {
      background-color: #286090;
    }
  </style>
</head>
<body>
  <?php
  $users = [
      'username' => 'milad', 
      'password' => 'milad1383@'
  ];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST["username"] ?? '';
      $password = $_POST["password"] ?? '';

      if (empty($username) || empty($password)) {
          $message = 'لطفاً نام کاربری و رمز عبور را وارد کنید!';
          $messageClass = 'error';
      } elseif ($username == $users['username'] && $password == $users['password']) {
          $message = 'خوش آمدید milad!';
          $messageClass = 'success';
      } else {
          $message = 'نام کاربری یا رمز عبور اشتباه است!';
          $messageClass = 'error';
      }
  } else {
      $message = 'درخواست نامعتبر!';
      $messageClass = 'error';
  }
  ?>

  <div class="result-box <?php echo $messageClass; ?>">
    <?php echo $message; ?>
  </div>

  <a href="practice.html" class="back-btn">بازگشت به صفحه لاگین</a>
</body>
</html>