<?php
$result=[];
$result["word_length"]=" ";
$result["string_length"]=" ";
require_once "vendor/autoload.php";
use App\classes\Student;
Student::addition();

//if(isset($_POST["btn"]))
////{
//////    echo "test";
//////    exit();
////
//    $example=new App\classes\Exmple();
////    $result=$example->wordCharacterCount($_POST);
//       $result=Exmple::wordCharacterCount($_POST);
//}
use App\classes\Exmple;
if(isset($_POST["btn"]))
{
    $result=Exmple::wordCharacterCount($_POST);
}
?>

<form action="" method="post">
    <table>
        <tr>
            <th>Enter your string</th>
            <td><input type="text" name="given_string" size="50"></td>
        </tr>
        <tr>
            <th>Total Number of Word</th>
            <td><input type="text" value="<?php echo $result["word_length"];?>"></td>
        </tr>
        <tr>
            <th>Total Number of Characters</th>
            <td><input type="text" value="<?php echo $result["string_length"];?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
