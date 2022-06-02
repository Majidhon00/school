<?
  session_start();
  $tiluz=[
    'title'=>"QO'QON 33-MAKTAB",
    'content'=>"Assalomu alykum bizning school 33 web-saytimizga xush kelibsi",
    'btn'=>"Ro'yhatdan utish",
    'rg'=>"RO'YHATDAN O'TISH",
    'uqr'=>"O'qtuvchlar uchun ro'yxatdan o'tish",
    'uqr_c'=>"Bu yerga kiritgan maʼlumotlaringiz maʼlumotlar bazasiga kiritiladi, agar siz oʻqituvchi boʻlsangiz, albatta toʻldiring",
    'roy'=>"Ro'yxatdan o'tishni yakunlash uchun sizning ma'lumotlaringiz talab qilinadi",
    'roy2'=>"Bu xavfsiz va faqat ushbu sayt uchun ishlaydi",
    'roy3'=>"sizning huquqlaringiz 100% himoya qilinadi"
  ];
  $tilen=[
    'title'=>"KOKAND 33-SCHOOL",
    'content'=>"Hello welcome to our school 33 website",
    'btn'=>"REGISTER",
    'rg'=>"REGISTER",
    'uqr'=>"Registration for teachers",
    'uqr_c'=>"The information you enter here will be entered into the database, if you are a teacher, be sure to fill it out",
    'roy'=>"Enter your details to complete the registration",
    'roy2'=>"It is safe and only works for this site",
    'roy3'=>"your rights are 100% protected"
  ];
  if($_GET['lang']=='en'){
    $sayt=$tilen;
  }
  else{ 
    $sayt=$tiluz;
  }
?>