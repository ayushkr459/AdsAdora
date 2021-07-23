<?PHP 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["email"]) && isset($_POST["name"]) && isset($_POST["message"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        // $phone = $_POST["phone"];
        $msgText = $_POST["message"];
        $TEXTDATA = urlencode("*--- AdsAdora Contact Request Ticket---*\n\n".
                    "*Date:* ".date(DATE_RFC3339_EXTENDED)."\n".
                    "*Name:* $name\n".
                    "*Email:* $email\n".
                    // "*Phone:* $phone\n".
                    "*Text:* \n$msgText");
        file_get_contents("https://api.telegram.org/bot1174148471:AAHQi1CjBrQVMckUVCr6TQKmQsLcxJCXOVw/sendMessage?text=$TEXTDATA&chat_id=-1001580018188&parse_mode=markdown");
        ?>
        <script>alert("Your request was saved. We will reach you back soon.")</script>
        <?PHP
    }
    header('Location:contact.php');
}
