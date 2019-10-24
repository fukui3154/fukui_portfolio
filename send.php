<!DOCTYPE html>
<html lang="ja">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>


  <?php
  if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    $err_msg = '';
    $complete_msg = '';
  } else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $err_msg = '';
    $complete_msg = '';

    if($name == '' || $email == '' || $subject == '' || $message == ''){
      $err_msg = '全ての項目を入力してください';
    }

    if ($err_msg == ''){
      $to = 'taco3suisui@gmail.com';
      $headers ="From: " . $email . "\r\n";

      $message .= "\r\n\r\n" . $name;

      mb_send_mail($to, $subject, $message, $headers);

      $complete_msg = '送信されました!';

      $name = '';
      $email = '';
      $subject = '';
      $message = '';
    }
  }
  ?>

  <?php if ($err_msg != ''): ?>
    <div class="alert alert-danger">
      <?php echo $err_msg; ?>
    </div>
  <?php endif; ?>

  <?php if ($completed_msg != ''): ?>
    <div class="alert alert-success">
      <?php echo $completed_msg; ?>
    </div>
  <?php endif; ?>

</body>
</html>
