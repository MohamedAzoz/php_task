<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma3refa</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="https://scontent.fcai21-2.fna.fbcdn.net/v/t39.30808-1/393938689_717247553782306_7955400428787340232_n.jpg?stp=dst-jpg_s200x200&_nc_cat=106&ccb=1-7&_nc_sid=f4b9fd&_nc_ohc=5Ivj27o44IYQ7kNvgE6Q9GD&_nc_zt=24&_nc_ht=scontent.fcai21-2.fna&_nc_gid=AJIR3W6bWusRI6QxNJAAkId&oh=00_AYBHDkOT7bhbt9dRbhsI3bT2fqCAXenbBF69y7z7wVAr4A&oe=670E8F73" type="image/x-icon">
    <style>
        .move{
            animation: move1 2s forwards;
         }
        @keyframes move1 {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translate(0);
                opacity: 1;
            }
        }
        .move2{
            animation: move2 2.5s forwards;
         }
        @keyframes move2 {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .hov:hover{
            background-color: blue;
            padding: 20px;
            box-sizing: border-box; 
            border-radius:10%;
        }
        .hover:hover{
            opacity: 0.5;
        }
        .h:hover{
            background-color: gold;
            border-radius:10%;
        }
    </style>
</head>
<body>