<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Create a New Projects</h1>
    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Project Title">
        <input type="text" name="description" placeholder="Project Description">
        <button type="submit">Create Project</button>
    </form>

</body>
</html>