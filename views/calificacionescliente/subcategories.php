<?php
//$conexion = new mysqli('localhost', DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);

$id_category = $_POST['id_category'];
/*
$result = $conexion->query("SELECT c.id_category, name FROM ps_category c
                            LEFT JOIN ps_category_lang cl ON (cl.id_category = c.id_category AND cl.id_lang = 1)
                            WHERE id_parent = ".$id_category." ORDER BY name ASC");
*/

$result= Yii::$app->db->createCommand("SELECT CA.COD_AGRICOLA,CA.NOM_AGRICOLA,CTE.NOM_CTE FROM CATAGRICOLAS CA 
														INNER JOIN CATCTES CTE ON(CA.COD_CTE=CTE.COD_CTE) WHERE CTE.COD_CTE='".$id_category."' ORDER BY NOM_AGRICOLA")->queryAll();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        $html .= '<option value="'.$row['COD_AGRICOLA'].'">'.$row['NOM_AGRICOLA'].'</option>';
    }
}
echo $html;
?>