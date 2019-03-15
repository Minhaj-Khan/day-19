<?php

namespace App\classes;

class Exmple
{
    public function wordCharacterCount($data)
    {
////        echo "test";
////        exit();
//        echo "<pre>";
//        print_r($data);
////        echo "test";
//////        exit();
//            $stringLength=strlen($data["given_string"]);
////            echo $given_string;
//            $wordLength=str_word_count($data["given_string"]);
////            echo $wordLength;
//            $result=
//                [
//                    "string_length"=>$stringLength,
//                    "word_length"=>$wordLength,
//                ];
//            return $result;

        $stringLength=strlen($data["given_string"]);
        $wordLength=str_word_count($data["given_string"]);
        $result=
            [
                "string_length"=>$stringLength,
                "word_length"=>$wordLength

            ];
        return $result;

    }
}
?>
<script>
    //JSON Format
    {
        'name':'minhaj',
        'city':'Dhaka',
        'country':'Bangladesh',
        'phone':'01794114422',
        'gender':'Male'
    }

</script>
