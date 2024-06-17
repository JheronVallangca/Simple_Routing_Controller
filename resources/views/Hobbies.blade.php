<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>
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
    <section class='info'>
        <div>
            <h1>Hobbies</h1>
            <p><strong>Musics:</strong> {{ $guitar }}</p>
            <p><strong>Games:</strong> {{ $games }}</p>
            <p><strong>Movies:</strong> {{ $movies }}</p>
            <p><strong>Sports:</strong> {{ $sports }}</p>
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