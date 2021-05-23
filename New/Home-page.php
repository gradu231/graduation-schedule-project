<html>
<head>
    
    <style>
        body {
            background-image: url(c.jpg);
            background-repeat: no-repeat;
            background-size: 1370px 630px;
            align-content: center;
        }
        table {
            width: 40%;
            margin-top: 100px;
            margin-left: 500px;
        }
        h1 {
            margin-left: 250px;
            margin-top: 100px;
        }
        h3 {
            margin-top: 50px;
            text-align: center;
        }
        .zoom {
        transition: transform .2s; /* Animation */
        margin: 0 auto;
        }

        .zoom:hover {
        transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        a:link {
            text-decoration: none;
        }
    </style>
    </head>
    <body>
        <script>
            
        </script>
        <h1>
            <span style="color:black;font-size: 40px;">Welcome to KASIT graduation projects System</span>
        </h1>
        <h3 style="color:black;line-height: 1.2">
            Graduation project course is a partial requirement for the fulfillment of the bachelor degree in Computer Science, Computer Information Systems, and Business Information Technology at KASIT. It provides students the opportunity to implement what they learnt in a real world solution or system. In this System, we provide information about the graduation project’s available supervisors to choose one of them and send request.
        </h3>
        <table>
            <tr>
                <td>
                    <div class="zoom"><a href="student-login.php"><img src="mm.png" width="150px" height="150px" style="margin-left: -110px;">
                        <figcaption style="margin-left: -65px;margin-top: 5px;color: black"><strong>Student</strong></figcaption></a></div>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td style="margin-left: 100px">
                    <div class="zoom"><a href="supervisor-login.php"><img src="s.png" width="135px" height="135px" style="margin-left: 0px;"> <figcaption style="margin-left: 30px;margin-top: 18px;color: black"><strong>Supervisor</strong></figcaption></a></div>
                </td>
            </tr>
                
        </table>
    </body>
</html>