<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .btn {
            border: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand bg-white shadow-sm px-3" style="height: 68px;">
        <div class="container-fluid">   
            <div class="flex-grow-1 text-center text-md-start">
                <h5 class="mb-0 text-[24px] font-bold">@yield('page-title', 'Dashboard')</h5>
            </div>

            <form>
                <input type="search" class="form-control" placeholder="Search...">
            </form>
            
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Yimm YoungSteav
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>