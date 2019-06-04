<?php
function Password_Encrypter($password){
$BlowFish_Hash_Format="$2y$12$";
$Salt_Length=22;
$Salt = Generate_Salt($Salt_Length);
$Formatting_BlowFish_With_Salt = $BlowFish_Hash_Format.$Salt;
$Hash = crypt($password, $Formatting_BlowFish_With_Salt);
return $Hash;
}
function Generate_Salt($length){
$Unique_Random_string = md5(uniqid(mt_rand(), true));

//here the md stands for message digest agorith is a function that is used to digested the given message so it would bring some garbage out of itit takes two values a string(to be calculated adnd raw stands for data md5(String,true/false)) and a 
//uniqid is a function that is used to generate the unique id to the current hashed text
//

$Base64_String = base64_encode($Unique_Random_string); //base64_encode() Function The base64_encode() function is an inbuilt function in PHP which is used to Encodes data with MIME base64

$Modified_Base64_String = str_replace('+','.',$Base64_String);  //str_replace(word we are looking for, a word we want to out forth, sentace that a w word belongs)

$Salt = substr($Modified_Base64_String, 0, $length); //The substr() function returns a part of a string.

//Note: If the start parameter is a negative number and length is less than or equal to start, length becomes 0.

return $Salt;

}
function Password_check($password,  $Existing_Hash){
    $Hash = crypt($password, $Existing_Hash);
        if($Hash === $Existing_Hash){
            return true;
        }
        else {
            return false;
        }
    
}
$returned_value = Password_Encrypter("welcome");
echo "The garbage text is $returned_value";
?>