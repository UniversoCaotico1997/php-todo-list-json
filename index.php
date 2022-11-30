<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP ToDo List JSON</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <h1 class="text-center my-5 text-white">Todo List</h1>
            <form action="index.php" method="POST">
                <div class="box bg-white d-flex justify-content-center align-items-center flex-column">
                    <ul>
                        <li v-for="task in tasks">
                            {{task}}
                        </li>
                    </ul>
                    <!-- /.ul -->
                    <div>
                        <input type="text" name="newTask" id="newTask" placeholder="Inserisci una nuova task">
                        <button>Inserisci</button>
                    </div>
                </div>
                <!-- /.box -->
            </form>
            <!-- /.form -->
        </div>
        <!-- /.container -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>