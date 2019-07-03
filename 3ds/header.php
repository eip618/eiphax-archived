<?php
if (isset($keywords)==false) {
    $keywords="";
}
if (isset($title)==false) {
    $title="eipHax";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136684222-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-136684222-1');
    </script>
    <title><?php $title ?></title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    <meta name="keywords" content=<?php echo "\"$keywords\"" ?> >
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body class="animated">
        <div class="header">
            <div class="container">
                <div class="logo">
                    <h1>eipHax</h1>    
                </div>
                <div class="nav">
            		<ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="sderrors.php">SD Error Guide</a></li>
                        <li><a href="nsui.php">NSUI Guide</a></li>
                        <li><a href="piracy.php">Piracy CliffNotes</a></li>
                        <li><a href="https://tinydb.eiphax.tech/">TinyDB</a></li>
                        <li><a href="issues.php">Troubleshooting</a></li>
                    </ul>
                </div>
            </div>
        </div>
