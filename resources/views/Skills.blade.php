<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>

<body>
    <section>
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
        
     <section>
         <div>
             <button><a href="/about">ABOUT ME</a></button>
             <button><a href="/skills">SKILLS</a></button>
             <button><a href="/hobbies">HOBBIES</a></button>
         </div>
     </section>
</body>
</html>