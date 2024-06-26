<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        .info {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .button{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a {
            text-decoration: none;
            font-size: 16px;
            color: #333;
        }

    </style>
</head>

<body>
    <section class="info">
        <div>
            <h1>Skills</h1>
            <ul>
                <li>{{ $first }}</li>
                <li>{{ $second }}</li>
                <li>{{ $third }}</li>
                <li>{{ $fourth }}</li>
                <li>{{ $fifth }}</li>
                <li>{{ $sixth }}</li>
            </ul>
        </div> 
     </section>
        
     <section class='button'>
         <div>
             <button><a href="/about">ABOUT ME</a></button>
             <button><a href="/skills">SKILLS</a></button>
             <button><a href="/hobbies">HOBBIES</a></button>
         </div>
     </section>
</body>
</html>