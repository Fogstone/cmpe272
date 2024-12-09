<html>

<head>
    <title>SHREKS SPORTS WORLD | ONLINE SPORTS SHOPPING STORE</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io//favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php">SHREKS SPORTS WORLD</a>
            </div>
            <ul class="nav navbar-nav">
                <li class=""><a href="aboutus.php">About Us</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="products.php">All Products</a></li>
                        <li><a href="recentlyvisited.php">Recently visited</a></li>
                        <li><a href="mostvisited.php">Most visited</a></li>
                    </ul>
                </li>
                <li class=""><a href="news.php">News</a></li>
                <li class=""><a href="contacts.php">Contacts</a></li>
                <li class=""><a href="users.php">Account</a></li>
            </ul>

            <form class="navbar-form navbar-right" role="search" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                </div>
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </form>

        </div>
    </nav>
    <section style="margin-top: 60px;" class="main-section alabaster" id="tops">
        <h1 style="text-align: center"><b>All users data</b></h1><br />
        <div class="container">
            <div class="table-responsive">
                <h4 style="text-align: center"><b><U>SHREKS SPORTS WORLD</U></b></h4><br />
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Home Contact</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $curl_handle = curl_init();

                        curl_setopt($curl_handle, CURLOPT_URL, "https://shreksonline.000webhostapp.com/assignment-3/sharemycontacts.php");
                        curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
                        $contents = curl_exec($curl_handle);
                        $data = json_decode($contents, true);

                        $myInteger = 0;

                        foreach ($data as $key => $item) {
                        ?>
                            <tr>
                                <td><?php echo $myInteger + 1; ?></td>
                                <td><?php echo $item['firstname']; ?></td>
                                <td><?php echo $item['lastname']; ?></td>
                                <td><?php echo $item['email']; ?></td>
                                <td><?php echo $item['address']; ?></td>
                                <td><?php echo $item['contact']; ?></td>
                                <td><?php echo $item['homecontact']; ?></td>
                            </tr>
                        <?php
                            $myInteger++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive">
                <h4 style="text-align: center"><b><U>Pets Care</U></b></h4><br />
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <!--<th>Email</th>-->
                            <!--<th>Address</th>-->
                            <!--<th>Contact</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        curl_setopt($curl_handle, CURLOPT_URL, "https://arpithan.000webhostapp.com/expose_users.php");
                        $contents = curl_exec($curl_handle);
                        $data = json_decode($contents, true);
                        $myInteger = 0;
                        foreach ($data as $key => $item) {
                        ?>
                            <tr>
                                <td><?php echo $myInteger + 1; ?></td>
                                <td><?php echo $item['firstname']; ?></td>
                                <td><?php echo $item['lastname']; ?></td>
                                <!--<td><?php echo $item['email']; ?></td>-->
                                <!--<td><?php echo $item['address']; ?></td>-->
                                <!--<td><?php echo $item['cell_phone']; ?></td>-->
                            </tr>
                        <?php
                            $myInteger++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>