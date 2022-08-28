 <?php
session_start();

 $name     = $_POST['name'];
 $email    = $_POST['email'];
 $contact  = $_POST['contact'];
 $age      = $_POST['age'];
 $movie    = $_POST['movie'];
 $seat     = $_POST['seat'];
 $sCount   = $_POST['sCount'];
 $date     = $_POST['date'];
 $time     = $_POST['time'];
 $clock    = $_POST['clock'];
 $total    = $_POST['total'];

 $_SESSION['name'] = $name;
 $_SESSION['email'] = $email;
 $_SESSION['contact'] = $contact;
 $_SESSION['age'] = $age;
 $_SESSION['movie'] = $movie;
 $_SESSION['seat'] = $seat;
 $_SESSION['sCount'] = $sesCountat;
 $_SESSION['date'] = $date;
 $_SESSION['clock'] = $clock;
 $_SESSION['total'] = $total;

 $createToday = new DateTime('now', new DateTimeZone('Asia/Colombo'));
  $today= $createToday->format('Y-m-d');

  if (($open = fopen("contacts.csv", "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $array[] = $data; 
    }
  
    fclose($open);
  }
  // echo "<pre>";
  // var_dump($array);
  // echo "</pre>";



$list = $array;

$file = fopen("contacts.csv","w");
  
foreach ($list as $line) {
  fputcsv($file, $line);
}
  $main = array($today, $name ,$age,$email, $contact,$movie,$date,$time,$seat,$sCount,$total );
fputcsv($file, $main);

fclose($file);



?><script type="text/javascript">
    
    setTimeout("location.href = 'index.php';",0);  // Page Dillay 2 Second
    window.open("print.php");
    </script><?php



?> 