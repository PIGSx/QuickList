<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickList</title>
    <link rel="stylesheet" href="css/list.css">
</head>

<body>
    <h1>our list | NAME</h1>
    <div class="content">
        <div class="content-item">
            <input type="text" id="input-task" placeholder="enter your task">
            <button onclick="newTask()" id="btn-task" title="clique aqui para adicionar uma nova task" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>
            </button>
        </div>
        <div class="content-list">
            <ul id="to-do-list">
                <li><button>ok</button></li>
            </ul>
        </div>
    </div>
</body>
<script src="js/script.js"></script>

</html>