<!-- get data from database -->
<?php
    //connect to db
    require_once ('../config/connection.php');

    $query = "select * from piatti";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My order</title>
</head>

<body>
    <!--navbar-->
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <!-- elementi navbar -->
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="menu.php">Esplora il menu</a></li> <!--btn menu -->
                    <li><a>About us</a></li> <!-- btn about us -->
                </ul>
            </div>
            <a href="index.php" class="btn btn-ghost text-xl">Bella Scaloppa</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="menu.php">Esplora il menu</a></li> <!--btn menu -->
                <li><a href="about.html">About us</a></li> <!-- btn about us -->
            </ul>
        </div>
        <div class="navbar-end">

            <!-- user -->
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <!-- link to user profile page -->
                        <a href="user.html">
                            <img alt="user profile" src="https://cdn-icons-png.flaticon.com/128/149/149071.png" />
                        </a>
                    </div>
                </div>
            </div>

            <!--Theme controller-->
            <label class="swap swap-rotate">

                <!-- nascondo la checkbox -->
                <input type="checkbox" class="theme-controller" value="synthwave" />

                <!-- sun icon -->
                <svg class="swap-off fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                </svg>

                <!-- moon icon -->
                <svg class="swap-on fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                </svg>

            </label>
        </div>
    </div>

    <!-- container -->
    <div class="artboard phone-3 max-w-md mx-auto text-center text-neutral-content jus">
        <!-- order title -->
        <div class="mt-20 max-w-md mx-auto text-center text-neutral-content jus">
            <h3 class="mb-5 text-5xl font-bold">Thank you for the order</h3>
        </div>

        <!-- order id -->
        <div class="mt-15 max-w-md mx-auto text-center text-neutral-content jus">
            <p class="mb-5 text-3xl font-italic">Order ID: 123456789</p>
        </div>

        <!-- order recap -->
        <div class="mt-15 max-w-md mx-auto text-center text-neutral-content jus">
            <table class="table table-xs">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <!-- while condition -->
                            <td><?php echo $row['codPiatto']; ?></td>
                            <td><?php echo $row['nomePiatto']; ?></td>
                            <td><?php echo $row['ingredienti']; ?></td>
                            <td><?php echo $row['prezzo']; ?></td>

                            <!-- order button -->
                            <td>
                                <form method="post">
                                    <input type="hidden" name="codPiatto" value="<?php echo $row['codPiatto']; ?>">
                                    <button class="ml-2 btn btn-outline btn-accent" type="button "> Order</button>
                                </form>
                            </td>

                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Ingredients</th>
                        <th>Price €</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>

</html>