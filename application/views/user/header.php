<html>



<style>
    /* body {
        margin-top: 50px;
        background-color: #fff;
        font-family: Arial, sans-serif;
        font-size: 14px;
        letter-spacing: 0.01em;
        color: #39464e;
    } */

    .navbar-default {
        background-color: #FFF;
        margin-left: 200px;
    }

    /*main side bar*/
    .msb {
        width: 200px;
        background-color: #F5F7F9;
        position: fixed;
        left: 0;
        top: 0;
        right: auto;
        min-height: 100%;
        overflow: auto;
        white-space: nowrap;
        height: 100%;
        z-index: 1;
        border-right: 1px solid #ddd;
        

        .navbar {
            border: none;
            margin-left: 0;
            background-color: inherit;
            padding: 15px 25px;
        }

        .navbar-header {
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
            margin-bottom: 20px;
            background: #fff;
        }

        .navbar-nav {
    padding: 15px 25px;
    float: left;
    margin: 5px;
}

            li {
                display: block;
                width: 100%;
                padding: 15px 25px;

                a {
                    padding: 15px 25px;
                    color: #5f5f5f;

                    .glyphicon,
                    .fa {
                        margin-right: 8px;
                    }
                }
            }
        

        .nb {
            padding: 15px 25px;
            
            margin-bottom: 30px;
            overflow: hidden;

        }
    

    ul.nv,
    ul.ns {
        position: relative;
        padding: 15px 25px;
        list-style: none;
    }

    .nv {
        li {
            display: block;
            position: relative;
            padding: 10px 25px;

            &::before {
                clear: both;
                content: "";
                display: table;
            }

            a {
                color: #444;
                padding: 10px 25px;
                display: block;
                vertical-align: middle;

                .ic {
                    font-size: 16px;
                    margin-right: 5px;
                    font-weight: 300;
                    display: inline-block;
                }
            }
        }

        /*ns: nav-sub*/
        .ns {
            li {
                a {
                    padding: 10px 50px;
                }
            }

        }

    }


    /*main content wrapper*/
    .mcw {
        margin-left: 200px;
        position: relative;
        min-height: 100%;

        /*content view*/
        .cv {}
    }


    /*globals*/
    a,
    a:focus,
    a:hover {
        text-decoration: none;
    }


}

.logout{
    padding:17px !important;
}

    .msb,
    .mnb {
        -moz-animation: slidein 300ms forwards;
        -o-animation: slidein 300ms forwards;
        -webkit-animation: slidein 300ms forwards;
        animation: slidein 300ms forwards;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .mcw {
        -moz-animation: bodyslidein 300ms forwards;
        -o-animation: bodyslidein 300ms forwards;
        -webkit-animation: bodyslidein 300ms forwards;
        animation: bodyslidein 300ms forwards;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }



    /* Slide in animation */
    @-moz-keyframes slidein {
        0% {
            left: -200px;
        }

        100% {
            left: 0;
        }
    }

    @-webkit-keyframes slidein {
        0% {
            left: -200px;
        }

        100% {
            left: 0;
        }
    }

    @keyframes slidein {
        0% {
            left: -200px;
        }

        100% {
            left: 0;
        }
    }

    @-moz-keyframes slideout {
        0% {
            left: 0;
        }

        100% {
            left: -200px;
        }
    }

    @-webkit-keyframes slideout {
        0% {
            left: 0;
        }

        100% {
            left: -200px;
        }
    }

    @keyframes slideout {
        0% {
            left: 0;
        }

        100% {
            left: -200px;
        }
    }

    @-moz-keyframes bodyslidein {
        0% {
            left: 0;
        }

        100% {
            margin-left: 200px;
        }
    }

    @-webkit-keyframes bodyslidein {
        0% {
            left: 0;
        }

        100% {
            left: 0
        }
    }

    @keyframes bodyslidein {
        0% {
            margin-left: 0;
        }

        100% {
            margin-left: 200px;
        }
    }

    @-moz-keyframes bodyslideout {
        0% {
            margin-left: 200px;
        }

        100% {
            margin-right: 0;
        }
    }

    @-webkit-keyframes bodyslideout {
        0% {
            margin-left: 200px;
        }

        100% {
            margin-left: 0;
        }
    }

    @keyframes bodyslideout {
        0% {
            margin-left: 200px;
        }

        100% {
            margin-left: 0;
        }
    }
</style>




<script src="jquery-3.7.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Google Tag Manager -->

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Include SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!--Custo
    <!-- Include SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<!-- Sweet Alert css-->
<link href="<?= BASEURL ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<nav class="mnb navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <i class="ic fa fa-bars"></i>
            </button>
            <div style="padding: 15px 0;">
                <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
   
        
        </div>
    </div>
</nav>
<!--msb: main sidebar-->
<div class="msb" id="msb">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="brand-wrapper">
                <!-- Brand -->
                <div class="brand-name-wrapper">
                    <a class="navbar-brand" href="#">
                      Employee management
                    </a>
                </div>

            </div>

        </div>

        <!-- Main Menu -->
        <div class="side-menu-container">
            <ul class="nav navbar-nav">


                <li>
                    <a class="dropdown-item" href="<?= BASEURL ?>user/index">Dashboard</a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?= BASEURL ?>user/profile">profile</a>
                </li>
             
                <li>
                    <a class="dropdown-item logout" href="<?= BASEURL ?>user/logout">Logout</a>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>


<script>
    (function() {
        $('#msbo').on('click', function() {
            $('body').toggleClass('msb-x');
        });
    }());
</script>



<!-- Check for success_message in flashdata and display Swal.fire if it's set -->
<?php
$success_message = $this->session->flashdata('success_message');
$error_message = $this->session->flashdata('error_message');
if (!empty($success_message)) {
    echo "<script>
        Swal.fire({
            title: 'Success',
            text: '$success_message',
            icon: 'success',
        });
    </script>";
}
if (!empty($error_message)) {
    echo "<script>
        Swal.fire({
            title: 'Error',
            text: '$error_message',
            icon: 'error',
        });
    </script>";
}
?>

</html>