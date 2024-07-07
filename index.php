<!--Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

</head>
    <body>
        <main id="app">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h1>Todo List</h1>
                        <section class="todo-list">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action" v-for= "todoElement in todoList"
                                :class=" todoElement.completato ? 'text-decoration-line-through' : '' ">
                                    <p>{{todoElement.nome}}</p>
                                </li>
                            </ul>
                        </section>
                        <section class="user-input">
                            <input type="text" class="input-group" @keyup.enter="addTask(newTaskName)" v-model="newTaskName">
                        </section>
                        
                    </div>
                </div>
            </div>


        </main>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js"
            integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw=="
            crossorigin="anonymous" 
            referrerpolicy="no-referrer">
    </script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
    </body>
</html>