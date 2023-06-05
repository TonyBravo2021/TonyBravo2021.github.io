include_once("db_connect.php");
$input = filter_input_array(INPUT_POST);

if (isset($input['action']) && $input['action'] == 'edit') {   
    $update_field = '';
    
    if (isset($input['nombre'])) {
        $update_field .= "nombre='" . mysqli_real_escape_string($conn, $input['nombre']) . "'";
    } else if (isset($input['autor'])) {
        $update_field .= "autor='" . mysqli_real_escape_string($conn, $input['autor']) . "'";
    } else if (isset($input['isbn'])) {
        $update_field .= "isbn='" . mysqli_real_escape_string($conn, $input['isbn']) . "'";
    } else if (isset($input['categoria'])) {
        $update_field .= "categoria='" . mysqli_real_escape_string($conn, $input['categoria']) . "'";
    }   
    
    if ($update_field && isset($input['id'])) {
        $id = mysqli_real_escape_string($conn, $input['id']);
        $sql_query = "UPDATE libro SET $update_field WHERE id='$id'";  
        mysqli_query($conn, $sql_query) or die("database error: " . mysqli_error($conn));     
    }
}

