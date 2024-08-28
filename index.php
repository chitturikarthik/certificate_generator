
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            html, body {
                margin: 0;
                padding: 0;
                font-family: 'Poppins',sans-serif;
            }
            form{
                /* width:30%; */
                display: flex;
                flex-direction: column;
                align-items:center;
                justify-content: flex-start;
            }
            .input-grp , select{
                width:400px;
                display: flex;
                flex-direction: column;
                height: 4rem;
            }
            .button{
                display: flex;
                column-gap: 0.25rem;
                align-items: center;
                background-color: #222;
                padding: 0.5rem 1rem;
                border-radius:0.5rem;
                color:#fff;
                cursor:pointer;
                border:none;
                outline:none;
            }
    </style>
</head>
<body>
        <form method="get" action="certificate.php">
            <div class="input-grp">
                <label>Enter Your Email Address</label>
                <input type="email" name="id" required>
            </div>
            <div class="input-grp">
                <label>Choose completed course</label>
                <select name="course_id">
                    <option value="ui_ux">Visual & UI/UX Design</option>
                    <option value="python">Python Programming</option>
                    <option value="digital_marketing">Digital Marketing</option>
                    <option value="cyber_security">Cyber Security</option>
                    <option value="photoshop">Photoshop</option>
                    <option value="graphic_design">Graphic Design</option>
                </select>
            </div>
            <input type="submit" value="Get Cerfiticate" class="button">
        </form>
</body>
</html>