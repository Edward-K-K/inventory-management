<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css link -->
    <link rel="stylesheet" href="admin.css" type="text/css">
    <!-- apex charts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>
    <main>
        <section class="main">
            <div class="navside">
                <nav>
                    <a href="#dashboard">dashboard</a>
                    <a href="#products">products</a>
                    <a href="#orders">orders</a>
                    <a href="#suppliers">Suppliers</a>
                    <a href="#accounting">accounts</a>
                    <a href="#profile">profile</a>
                    <a href="#logout">logout</a>
                </nav>
            </div>
            <section class="sec first" id="dashboard">
                <h2>dashboard</h2>
                <div class="infotabs">
                    <div class="tab tab001">
                        <div class="data">
                            <h4>orders</h4>
                            <div class="icon">
                                <p>🛒</p>
                            </div>
                            <p>10</p>
                        </div>
                    </div>
                    <div class="tab tab002">
                        <div class="data">
                            <h4>products</h4>
                            <div class="icon">
                                <p>👜</p>
                            </div>
                            <p>10</p>
                        </div>
                    </div>
                    <div class="tab tab003">
                        <div class="data">
                            <h4>Suppliers</h4>
                            <div class="icon">
                                <p>👨🏿‍🤝‍👨🏿</p>

   
                            </div>
                            <p>10</p>
                        </div>
                    </div>
                    <div class="tab tab004">
                        <div class="data">
                            <h4>pending payments</h4>
                            <div class="icon">
                                <p>💰</p>
                            </div>
                            <p>10</p>
                        </div>
                    </div>
                </div>
                <div class="analytics">
                    <h3>sales analytics</h3>
                    <div class="chart" id="chart">
                        <script>
                            var options = {
                                chart: {
                                    type: 'line'
                                },
                                series: [{
                                    name: 'sales',
                                    data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
                                }],
                                xaxis: {
                                    categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
                                }
                            }

                            var chart = new ApexCharts(document.querySelector("#chart"), options);

                            chart.render();
                        </script>
                    </div>
                </div>
            </section>
            <section class="sec second" id="products">
                <h2>products</h2>
                <div class="prodInfoTab"></div>
              
            </section>
            <section class="sec third" id="orders">
                <h2>orders</h2>
            </section>
            <section class="sec forth" id="suppliers">
                <h2>Suppliers</h2>
                <table>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>number</th>
                    </tr>
                    
                </table>
            </section>
            <section class="sec fifth" id="accounting">
                <h2>accounting</h2>
            </section>
        </section>
    </main>
</body>

</html>