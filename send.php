<?php
    if(isset($_POST['submit'])) {
        $name           = $_POST['name'];
        $surname        = $_POST['surname'];
        $email          = $_POST['email'];
        $PhoneNumber    = $_POST['PhoneNumber'];
        $car            = $_POST['car'];
        $PickUpDate     = $_POST['PickUpDate'];
        $DropOffDate    = $_POST['DropOffDate'];
        $no_wa          = $_POST['noWa'];
        header("location:https://api.whatsapp.com/send?phone=$no_wa&text=*Customer%20Details%20From%20Website*%20%0D*Nama:*%20$name%20%0D*Surname:*%20$surname%20%0D*Email:*%20$email%20%0D*Phone%20Number:*%20$PhoneNumber%20%0D*Selected%20Car:*%20$car%20%0D*Pick%20Up%20Date:*%20$PickUpDate%20%0D*Drop%20Off%20Date:*%20$DropOffDate%20%0D");
    } else {
       echo "
        <script>
            window.location=history.go(-1);
        </script>
       ";
    }

    if(isset($_POST['btnSubmit'])) {
        $txtName           = $_POST['txtName'];
        $txtEmail          = $_POST['txtEmail'];
        $txtPhone          = $_POST['txtPhone'];
        $txtMsg            = $_POST['txtMsg'];
        $no_wa             = $_POST['noWa'];
        header("location:https://api.whatsapp.com/send?phone=$no_wa&text=*Feedback%20Sender%20From%20Website*%20%0D*Nama:*%20$txtName%20%0D*Email:*%20$txtEmail%20%0D*Phone%20Number:*%20$txtPhone%20%0D*Feedback%20Message%20:*%20$txtMsg%20%0D");
    } else {
       echo "
        <script>
            window.location=history.go(-1);
        </script>
       ";
    }
?>