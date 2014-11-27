  <?php
  include_once('includes/database.php');

  //Se recogen los datos de la funcion post
  $marcador = $_POST['marcador'];
  $result="";
  $tmp=[];
  $query = "SELECT * FROM taller3_micolta.ubicaciones WHERE ubicaciones.tipo ='".$marcador."'";
  $resultado = mysqli_query($con,$query);
  
//Estas variables son las que serviran para identificar el sitio
  while ( $row = mysqli_fetch_array($resultado) ) {
    $temp['id'] = $row["id"];
    $temp['lat'] = $row["latitud"];
    $temp['lon'] = $row["longitud"];
    $temp['nom'] = $row["nombre"];
    array_push($tmp,$temp);
  }
  $result["temps"] = $tmp;

  echo  json_encode($result);

  ?>
