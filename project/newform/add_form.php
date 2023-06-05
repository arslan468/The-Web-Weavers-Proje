<?php
    include("../connect.php");
    if(isset($_POST))
    {
        $name = trim($_POST['name']);
        $email= trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);

        $command = $connection->prepare("INSERT INTO form set name = ?, problem_title = ?, problem = ?, ss = ?");
        $insert = $command->execute(array($name, $subject, $message, $email));
        if($insert)
        {
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <h1 style="margin-top: 150px; margin-left: 39%; font-size: 55px; color:red;">
                                Yeni Form Yayınlandı
                            </h1>

                        </div>
                    </div>
                </div>
            <?php
            header("Refresh: 1; url=http://localhost/deneme/project/new_form.php");
            

        }
    }

?>