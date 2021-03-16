
<?
$name = "Не известно";
$age = "Не известно";
$json = file_get_contents('php://input');
$obj = json_decode($json);

$name=$obj->name;
$body=$obj->body;
$time=$obj->time;
$age=$obj->head;
$host = 'localhost';
$data = 'comments';
$user = 'root';
$password = 'mysql';
$connection = new mysqLi ($host,$user,$password,$data);
if($connection->connect_error)die('Error conection');
$query = "SELECT * FROM `comments` ";
$result = $connection->query($query);
if(!$result)die("Error");
$rows = $result->num_rows;
$sql = "INSERT INTO `comments`(`name`, `body`, `time`) VALUES ('{$name}', '{$body}', $time)";
mysqli_query($connection, $sql);
$comments  = array();
$data = mysqli_query($connection,$query);
$num_rows = mysqli_num_rows($data);
for ($i = 0 ; $i < $num_rows ; ++$i)
{
	$row = mysqli_fetch_row($data);
	$comments[$i] = $row;
}
//header('Content-type: application/json');
$comments_js = json_encode( $comments );

