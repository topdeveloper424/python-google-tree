<?php
    $query = intval(filter_input(INPUT_GET, "query"));
    if($query != NULL && $query.trim()!= ""){
        $command = 'python search.py query '.$query.' en';
        passthru($command);
        $yourURL="http://localhost/upload/index.php";
        echo ("<script>location.href='$yourURL'</script>");

    }

?>
