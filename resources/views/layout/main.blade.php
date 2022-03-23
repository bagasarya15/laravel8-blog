<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Icon --}}
    <link rel="icon" href="../img/icon/blog.svg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{-- My CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/home.css">

    {{-- Embeded CSS --}}
    <style>
        element.style {
            display: inline;
        }

        .scroll-to-top {
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            display: none;
            width: 2.75rem;
            height: 2.75rem;
            text-align: center;
            color: #fff;
            background: rgba(90, 92, 105, 0.5);
            line-height: 46px;
        }

        .rounded {
            border-radius: 0.35rem !important;
        }

        a {
            color: #de3f4e;
            background-color: transparent;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        user agent stylesheet a:-webkit-any-link {
            color: -webkit-link;
            cursor: pointer;
            text-decoration: underline;
        }

        .footer {
            margin: 0px auto;
            width: 100%;
            height: 50px;
            padding-left: 10px;
            line-height: 50px;
            position: relative;
            top: 1.5rem;
            bottom: 0px;
            font-size: small
        }

    </style>

    <title>
        Moza Blog | {{ $title }}
    </title>
</head>

<body id="page-top">
    @include('partials.navbar')
    <div class="container my-4">
        @yield('container')

        {{-- Scroll TopPage --}}
        @include('partials.scroll')
        {{-- End Scroll --}}
    </div>

    <div class="footer">
        @include('partials.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Modal Logout -->
    <div class="modal fade" id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="logoutLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="logoutLabel" style="font-family: poppins">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin ingin meninggalkan halaman ini ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
