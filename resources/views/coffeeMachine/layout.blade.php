<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/3d8af50c2d.js" crossorigin="anonymous"></script>
    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="public/css/style.css"> -->
    <title>Kohviautomaat</title>
</head>
<body>
    <style>
        :root {
            --margin: 0.5rem;
        }

        .container {
            padding: 2rem;
            width: 100%;
            margin: 0; /*Left*/
        }

        .hr-1 {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 2px solid rgba(0, 0, 0, 0.1);
        }

        #item-title {
            vertical-align: middle;
            margin: 0.5rem;
            padding: 0.5rem;
            width: 500px;
        }

        #item-description {
            vertical-align: middle;
            margin: 0.5rem;
            padding: 0.5rem;
            width: 500px;
        }

        #item-steps {
            vertical-align: middle;
            margin: 0.5rem;
            padding: 0.5rem;
            width: 500px;
        }

        #show-description {
            vertical-align: middle;
            text-align: center;
            margin: 0.5rem;
            padding: 0.5rem;
        }

        #addTitle-btn {
            vertical-align: middle;
            margin: 0.5rem;
            margin-bottom: 1.5rem;
            /* padding: 0.5rem 2rem 0.5rem 2rem; */
            font-size: 1.2rem;
        }

        #Back-btn {
            vertical-align: middle;
            margin: 0.5rem;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            /* padding: 0.5rem 2rem 0.5rem 2rem; */
            font-size: 1.2rem;
        }

        #Default-btn {
            vertical-align: middle;
            margin: 0.5rem;
            font-size: 1.2rem;
        }

        #Step-btn {
            vertical-align: middle;
            margin-left: 0.5rem;
            font-size: 1.2rem;
        }

        .item-step {
            vertical-align: middle;
            margin: 0.5rem;
            padding: 0.5rem;
            width: 404px;
        }

        #vertical-align-item {
            vertical-align: middle;
        }

        .border-1 {
            border-width:3px !important;
        }

        .icon-create {
            vertical-align: middle;
            font-size: 2rem;
            text-decoration: none!important;
            color: #0275d8!important;
            /* margin-bottom: 1rem; */
            padding: 0.8rem;
            padding-left: 1rem;
        }

        .icon-addStep {
            vertical-align: middle;
            font-size: 2rem;
            text-decoration: none!important;
            color: #0275d8!important;
            /* margin-bottom: 1rem; */
            /* padding: 0.8rem; */
            padding-left: 1rem;
            padding-bottom: 0.2rem;
        }

        .icon-trashStep {
            vertical-align: middle;
            font-size: 1.5rem;
            text-decoration: none!important;
            color: red!important;
            padding-top: 1rem;
            padding-left: 1rem;
        }

        .icon-edit {
            vertical-align: middle;
            font-size: 1.5rem;
            text-decoration: none!important;
            color: orange!important;
        }

        .icon-trash {
            vertical-align: middle;
            font-size: 1.5rem;
            text-decoration: none!important;
            color: red!important;
            padding-left: 1rem;
        }

        .icon-done-on {
            vertical-align: middle;
            font-size: 1.5rem;
            /* padding-left: 1rem;
            padding-right: 0.5rem; */
            color: green;
        }
        .icon-done-off {
            vertical-align: middle;
            font-size: 1.5rem;
            /* padding-left: 1rem;
            padding-right: 0.5rem; */
            color: #E5E5E5;
        }
        .icon-done-on:hover, .icon-done-off:hover {
            cursor:pointer;
        }

        .cursor-hover {
            cursor: pointer;
        }

        .machine-item {
            margin-bottom: 1rem;
        }

        .padding-part {
            padding-left: 1rem;
            padding-right: 1rem;
        }

    </style>

    <div class="mx-auto container" style="margin: 5rem">
        <div class="border-1 border rounded p-4">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>